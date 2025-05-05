from flask import Flask, request, jsonify
from flask_cors import CORS
import numpy as np
import pickle

# Inisialisasi Flask
app = Flask(__name__)
CORS(app)

# Load model dan encoder
with open('./model.pkl', 'rb') as f:
    model, encoder = pickle.load(f)

@app.route('/')
def home():
    return jsonify({"message": "API Prediksi Nilai Aktif!"})

@app.route('/predict', methods=['POST'])
def predict():
    try:
        data = request.get_json()

        # Ambil data input
        mata_pelajaran = data['mata_pelajaran']
        jam_belajar = float(data['jam_belajar'])
        nilai_ujian = float(data['nilai_ujian_sebelumnya'])
        jam_tidur = float(data['jam_tidur'])
        tingkat_ekonomi = int(data['tingkat_ekonomi'])
        tingkat_motivasi = int(data['tingkat_motivasi'])
        pertemanan = int(data['pertemanan'])

        # Batasi nilai ujian sebelumnya maksimal 100
        nilai_ujian = min(nilai_ujian, 100)

        # Transformasi input
        subject_encoded = encoder.transform([[mata_pelajaran]])
        numerical_features = np.array([
            jam_belajar,
            nilai_ujian,
            jam_tidur,
            tingkat_ekonomi,
            tingkat_motivasi,
            pertemanan
        ]).reshape(1, -1)

        # Gabungkan semua fitur
        X_input = np.hstack([subject_encoded, numerical_features])

        # Prediksi dan batasi nilai prediksi maksimal 100
        prediksi = model.predict(X_input)[0]
        prediksi = np.clip(prediksi, 0, 100)

        return jsonify({
            "prediksi_nilai": round(prediksi, 2)
        })

    except Exception as e:
        return jsonify({
            "error": str(e)
        }), 400

if __name__ == '__main__':
    app.run(debug=True, host='0.0.0.0')
