@extends('layouts.app')

@section('content')
    <div class="profile-container">
        <div class="profile-header">
            <h1 class="profile-title">Profil Pengguna</h1>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="error-list">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="profile-card">
            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="profile-form">
                @csrf
                @method('PUT')

                <div class="profile-avatar-section">
                    <div class="avatar-preview">
                        @if(auth()->user()->profile_photo)
                            <img src="{{ asset('storage/' . auth()->user()->profile_photo) }}" class="avatar-image"
                                id="avatarPreviewImg">
                        @else
                            <div class="avatar-placeholder" id="avatarPreviewPlaceholder">
                                <i class="fas fa-user"></i>
                            </div>
                            <img src="" id="avatarPreviewImg" class="avatar-image" style="display: none;">
                        @endif
                    </div>

                    <div class="avatar-upload">
                        <label for="profilePhoto" class="btn-upload">
                            <i class="fas fa-camera"></i> Pilih Foto
                        </label>
                        <input type="file" name="profile_photo" id="profilePhoto" accept="image/*" class="hidden-upload">
                        <small class="upload-hint">Format: JPG, PNG. Maksimal 2MB</small>
                    </div>
                </div>

                <div class="form-group">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" name="name" id="name" value="{{ old('name', auth()->user()->name) }}"
                        class="form-input" required>
                    <i class="fas fa-user form-icon"></i>
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email', auth()->user()->email) }}"
                        class="form-input" required>
                    <i class="fas fa-envelope form-icon"></i>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-save">
                        <i class="fas fa-save"></i> Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        :root {
            --primary-color: #4f46e5;
            --primary-hover: #4338ca;
            --text-color: #1f2937;
            --light-gray: #f3f4f6;
            --medium-gray: #e5e7eb;
            --dark-gray: #6b7280;
            --white: #ffffff;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --border-radius: 8px;
        }

        .profile-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .profile-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .profile-title {
            font-size: 28px;
            font-weight: 600;
            color: var(--text-color);
        }

        .profile-card {
            background-color: var(--white);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            padding: 30px;
        }

        .profile-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .profile-avatar-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .avatar-preview {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background-color: var(--light-gray);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            border: 3px solid var(--medium-gray);
        }

        .avatar-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .avatar-placeholder {
            font-size: 48px;
            color: var(--dark-gray);
        }

        .avatar-upload {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 5px;
        }

        .hidden-upload {
            display: none;
        }

        .form-group {
            position: relative;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--text-color);
        }

        .form-input {
            width: 100%;
            padding: 12px 16px 12px 40px;
            border: 1px solid var(--medium-gray);
            border-radius: var(--border-radius);
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
        }

        .form-icon {
            position: absolute;
            left: 12px;
            top: 40px;
            color: var(--dark-gray);
        }

        .btn-upload {
            background-color: var(--primary-color);
            color: white;
            padding: 10px 20px;
            border-radius: var(--border-radius);
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: background-color 0.3s;
        }

        .btn-upload:hover {
            background-color: var(--primary-hover);
        }

        .btn-save {
            background-color: var(--primary-color);
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: var(--border-radius);
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: background-color 0.3s;
            margin-top: 10px;
        }

        .btn-save:hover {
            background-color: var(--primary-hover);
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: var(--border-radius);
        }

        .alert-success {
            background-color: #d1fae5;
            color: #065f46;
            border: 1px solid #a7f3d0;
        }

        .alert-danger {
            background-color: #fee2e2;
            color: #b91c1c;
            border: 1px solid #fecaca;
        }

        .error-list {
            margin: 0;
            padding-left: 20px;
        }

        .upload-hint {
            color: var(--dark-gray);
            font-size: 14px;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
        }

        @media (max-width: 768px) {
            .profile-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .profile-card {
                padding: 20px;
            }
        }
    </style>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const profilePhotoInput = document.getElementById('profilePhoto');

            if (profilePhotoInput) {
                profilePhotoInput.addEventListener('change', function (e) {
                    const file = e.target.files[0];
                    const reader = new FileReader();

                    reader.onloadend = function () {
                        const imgPreview = document.getElementById('avatarPreviewImg');
                        const placeholder = document.getElementById('avatarPreviewPlaceholder');

                        if (placeholder) {
                            placeholder.style.display = 'none';
                        }

                        imgPreview.style.display = 'block';
                        imgPreview.src = reader.result;
                    }

                    if (file) {
                        reader.readAsDataURL(file);
                    }
                });
            }
        });
    </script>
@endsection