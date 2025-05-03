import pandas as pd
import numpy as np
import pickle
from sklearn.linear_model import LinearRegression
from sklearn.preprocessing import OneHotEncoder
from sklearn.model_selection import train_test_split

# Contoh data (bisa diganti dengan file CSV nyata)
data = {
    "mata_pelajaran": ["Matematika", "IPA", "IPS", "Matematika", "IPA", "IPS"],
    "jam_belajar": [2, 3, 1, 4, 2, 5],
    "nilai_ujian_sebelumnya": [70, 80, 65, 90, 60, 75],
    "jam_tidur": [7, 6, 8, 5, 6, 7],
    "tingkat_ekonomi": [3, 2, 4, 5, 1, 3],
    "tingkat_motivasi": [4, 3, 5, 5, 2, 3],
    "pertemanan": [3, 2, 4, 5, 1, 2],
    "nilai_akhir": [75, 82, 70, 95, 65, 78]
}

# Ubah ke DataFrame
df = pd.DataFrame(data)

# Fitur dan target
X = df.drop(columns=['nilai_akhir'])
y = df['nilai_akhir']

# One-hot encoding untuk mata pelajaran
encoder = OneHotEncoder(sparse_output=False)
encoded_subject = encoder.fit_transform(X[['mata_pelajaran']])

# Gabungkan fitur numerik dan hasil encoding
X_numeric = X.drop(columns=['mata_pelajaran']).values
X_all = np.hstack([encoded_subject, X_numeric])

# Split data untuk pelatihan dan uji (opsional)
X_train, X_test, y_train, y_test = train_test_split(X_all, y, test_size=0.2, random_state=42)

# Model Regresi Linier
model = LinearRegression()
model.fit(X_train, y_train)

# Simpan model dan encoder
with open("model.pkl", "wb") as f:
    pickle.dump((model, encoder), f)

# Simpan dataset ke CSV (opsional)
df.to_csv("data.csv", index=False)

print("Model dan encoder berhasil disimpan ke model.pkl")
