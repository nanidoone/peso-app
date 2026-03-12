<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | PESO Manolo Fortich</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            background-image: url('/images/eagle.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            position: relative;
            min-height: 100vh;
        }
        
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(30, 58, 138, 0.9) 0%, rgba(220, 38, 38, 0.8) 100%);
            z-index: 0;
        }
        
        .content-wrapper {
            position: relative;
            z-index: 1;
            padding: 2rem 1rem;
        }
        
        .back-button {
            position: absolute;
            top: 2rem;
            left: 2rem;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            color: white;
            padding: 0.8rem 1.5rem;
            border-radius: 3rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
            z-index: 10;
            text-decoration: none;
        }
        
        .back-button:hover {
            background: white;
            color: #1e3a8a;
            transform: translateX(-5px);
        }
        
        .step-indicator {
            display: flex;
            justify-content: space-between;
            margin: 3rem auto 2rem;
            max-width: 400px;
            position: relative;
        }
        
        .step {
            flex: 1;
            text-align: center;
            position: relative;
            z-index: 1;
        }
        
        .step-number {
            width: 40px;
            height: 40px;
            background: white;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 0.5rem;
            font-weight: 700;
            color: #1e3a8a;
            transition: all 0.3s ease;
        }
        
        .step.active .step-number {
            border-color: #ffd700;
            background: #ffd700;
            color: #1e3a8a;
        }
        
        .step.completed .step-number {
            border-color: #10b981;
            background: #10b981;
            color: white;
        }
        
        .step-label {
            font-size: 0.9rem;
            font-weight: 500;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        .step.active .step-label {
            font-weight: 700;
            color: #ffd700;
        }
        
        .form-container {
            max-width: 600px;
            margin: 2rem auto;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 2rem;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            padding: 2.5rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .form-step {
            display: none;
        }
        
        .form-step.active {
            display: block;
        }
        
        .form-label {
            display: block;
            font-size: 0.9rem;
            font-weight: 600;
            color: #1e3a8a;
            margin-bottom: 0.5rem;
        }
        
        .form-input {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 2px solid #e5e7eb;
            border-radius: 1rem;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }
        
        .form-input:focus {
            outline: none;
            border-color: #1e3a8a;
            box-shadow: 0 0 0 4px rgba(30, 58, 138, 0.1);
        }
        
        .btn-nav {
            padding: 0.8rem 2rem;
            border-radius: 1rem;
            font-weight: 600;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .btn-next {
            background: #1e3a8a;
            color: white;
            border: none;
        }
        
        .btn-next:hover {
            background: #1e40af;
            transform: translateY(-2px);
        }
        
        .btn-prev {
            background: white;
            color: #1e3a8a;
            border: 2px solid #1e3a8a;
        }
        
        .btn-prev:hover {
            background: #f0f2f5;
            transform: translateY(-2px);
        }
        
        .btn-submit {
            width: 100%;
            background: linear-gradient(135deg, #1e3a8a, #dc2626);
            color: white;
            padding: 1rem;
            border-radius: 1rem;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }
        
        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px -5px rgba(220, 38, 38, 0.4);
        }
        
        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }
        
        .modal.active {
            display: flex;
        }
        
        .modal-content {
            background: white;
            border-radius: 2rem;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            padding: 2rem;
            position: relative;
            animation: slideUp 0.3s ease;
        }
        
        @keyframes slideUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        
        .modal-close {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: #f3f4f6;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .modal-close:hover {
            background: #e5e7eb;
            transform: rotate(90deg);
        }
        
        .terms-section {
            margin-bottom: 1.5rem;
        }
        
        .terms-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 0.5rem;
        }
        
        .terms-text {
            color: #4b5563;
            font-size: 0.95rem;
            line-height: 1.6;
            padding-left: 1rem;
            border-left: 2px solid #e5e7eb;
        }
        
        .bg-pattern {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: radial-gradient(circle at 10% 20%, rgba(255, 255, 255, 0.1) 0%, transparent 20%),
                              radial-gradient(circle at 90% 50%, rgba(255, 255, 255, 0.1) 0%, transparent 25%),
                              radial-gradient(circle at 30% 80%, rgba(255, 255, 255, 0.1) 0%, transparent 30%);
            z-index: 1;
        }
    </style>
</head>
<body>
    <div class="bg-pattern"></div>
    
    <!-- Back to Home Button -->
    <a href="/" class="back-button">
        <i class="fas fa-arrow-left"></i>
        <span>Back to Home</span>
    </a>
    
    <div class="content-wrapper">
        <!-- Header -->
        <div class="text-center mb-4">
            <div class="flex justify-center mb-4">
                <img src="/images/peso-logo.jpg" alt="PESO" class="w-20 h-20 rounded-2xl shadow-2xl border-4 border-white">
            </div>
            <h1 class="text-4xl font-bold text-white drop-shadow-lg">Create Account</h1>
            <p class="text-white/90 mt-2 drop-shadow">Join PESO Manolo Fortich</p>
        </div>

        <!-- Simple 2-Step Indicator -->
        <div class="step-indicator">
            <div class="step active" id="step1-indicator">
                <div class="step-number">1</div>
                <div class="step-label">Account</div>
                <div class="step-line"></div>
            </div>
            <div class="step" id="step2-indicator">
                <div class="step-number">2</div>
                <div class="step-label">Personal</div>
            </div>
        </div>

        <!-- Form Container -->
        <div class="form-container">
            <!-- Step 1: Account Details (Required) -->
            <div class="form-step active" id="step1">
                <h2 class="text-2xl font-bold text-blue-900 mb-6">
                    <i class="fas fa-user-circle mr-3 text-red-600"></i> Account Information
                </h2>
                
                <div class="space-y-4">
                    <div>
                        <label class="form-label">Full Name <span class="text-red-500">*</span></label>
                        <input type="text" class="form-input" placeholder="Juan Dela Cruz" required>
                    </div>
                    <div>
                        <label class="form-label">Email Address <span class="text-red-500">*</span></label>
                        <input type="email" class="form-input" placeholder="juan@example.com" required>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="form-label">Password <span class="text-red-500">*</span></label>
                            <input type="password" class="form-input" placeholder="********" required>
                        </div>
                        <div>
                            <label class="form-label">Confirm <span class="text-red-500">*</span></label>
                            <input type="password" class="form-input" placeholder="********" required>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 2: Personal Details (Optional) -->
            <div class="form-step" id="step2">
                <h2 class="text-2xl font-bold text-blue-900 mb-6">
                    <i class="fas fa-id-card mr-3 text-red-600"></i> Personal Information
                </h2>
                <p class="text-sm text-gray-500 mb-4">Optional - You can fill this later</p>
                
                <div class="space-y-4">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="form-label">Date of Birth</label>
                            <input type="date" class="form-input">
                        </div>
                        <div>
                            <label class="form-label">Gender</label>
                            <select class="form-input">
                                <option>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Prefer not to say</option>
                            </select>
                        </div>
                    </div>
                    
                    <div>
                        <label class="form-label">Mobile Number</label>
                        <input type="tel" class="form-input" placeholder="0917 123 4567">
                    </div>
                    
                    <div>
                        <label class="form-label">Address</label>
                        <input type="text" class="form-input" placeholder="Street, Barangay, City">
                    </div>
                </div>
            </div>

            <!-- Terms and Submit -->
            <div class="mt-6">
                <label class="flex items-start gap-2 cursor-pointer mb-4">
                    <input type="checkbox" class="w-4 h-4 rounded mt-1" required>
                    <span class="text-sm text-gray-600">
                        I agree to the 
                        <a href="#" onclick="openTermsModal(); return false;" class="text-blue-900 font-semibold hover:underline">Terms and Conditions</a>
                    </span>
                </label>

                <!-- Navigation Buttons -->
                <div class="flex justify-between">
                    <button type="button" class="btn-nav btn-prev" id="prevBtn" onclick="prevStep()" style="display: none;">Previous</button>
                    <button type="button" class="btn-nav btn-next" id="nextBtn" onclick="nextStep()">Next</button>
                    <button type="button" class="btn-submit" id="submitBtn" onclick="submitForm()" style="display: none;">
                        <i class="fas fa-check-circle mr-2"></i> Complete Registration
                    </button>
                </div>
            </div>

            <!-- Login Link -->
            <p class="text-center text-sm text-gray-600 mt-4">
                Already have an account? 
                <a href="/login" class="text-blue-900 font-semibold hover:underline">Sign in</a>
            </p>
        </div>
    </div>

    <!-- Terms and Conditions Modal (ICONS REMOVED) -->
    <div class="modal" id="termsModal">
        <div class="modal-content">
            <button class="modal-close" onclick="closeTermsModal()">
                <i class="fas fa-times"></i>
            </button>
            
            <h2 class="text-2xl font-bold text-blue-900 mb-4">
                Terms and Conditions
            </h2>
            
            <div class="terms-section">
                <h3 class="terms-title">1. Acceptance of Terms</h3>
                <p class="terms-text">
                    By accessing and using the PESO Manolo Fortich Job Portal, you accept and agree to be bound by the terms and conditions of this agreement.
                </p>
            </div>
            
            <div class="terms-section">
                <h3 class="terms-title">2. User Registration</h3>
                <p class="terms-text">
                    You must provide accurate, current, and complete information during the registration process. You are responsible for maintaining the confidentiality of your account credentials.
                </p>
            </div>
            
            <div class="terms-section">
                <h3 class="terms-title">3. Account Responsibilities</h3>
                <p class="terms-text">
                    You are solely responsible for all activities that occur under your account. Notify PESO immediately of any unauthorized use of your account.
                </p>
            </div>
            
            <div class="terms-section">
                <h3 class="terms-title">4. Privacy Policy</h3>
                <p class="terms-text">
                    Your use of the portal is also governed by our Privacy Policy, which outlines how we collect, use, and protect your personal information in compliance with RA 10173 (Data Privacy Act of 2012).
                </p>
            </div>
            
            <div class="terms-section">
                <h3 class="terms-title">5. Job Seeker Responsibilities</h3>
                <p class="terms-text">
                    You agree to provide truthful information about your qualifications and experience. Misrepresentation may result in account termination.
                </p>
            </div>
            
            <div class="terms-section">
                <h3 class="terms-title">6. Employer Responsibilities</h3>
                <p class="terms-text">
                    Employers must provide accurate job descriptions and comply with all applicable labor laws and regulations.
                </p>
            </div>
            
            <div class="terms-section">
                <h3 class="terms-title">7. Prohibited Activities</h3>
                <p class="terms-text">
                    You may not use the portal for any unlawful purpose, to harass others, or to distribute malicious content.
                </p>
            </div>
            
            <div class="terms-section">
                <h3 class="terms-title">8. Termination</h3>
                <p class="terms-text">
                    PESO reserves the right to terminate or suspend access to our service immediately, without prior notice, for any violation of these terms.
                </p>
            </div>
            
            <div class="flex justify-end mt-6">
                <button onclick="acceptTerms()" class="bg-gradient-to-r from-blue-900 to-red-600 text-white px-6 py-2 rounded-xl font-semibold hover:from-blue-800 hover:to-red-700 transition">
                    I Understand
                </button>
            </div>
        </div>
    </div>

    <script>
        let currentStep = 1;
        const totalSteps = 2;

        function updateStep() {
            document.getElementById('step1').classList.remove('active');
            document.getElementById('step2').classList.remove('active');
            document.getElementById('step1-indicator').classList.remove('active', 'completed');
            document.getElementById('step2-indicator').classList.remove('active', 'completed');

            document.getElementById(`step${currentStep}`).classList.add('active');
            document.getElementById(`step${currentStep}-indicator`).classList.add('active');

            if (currentStep > 1) {
                document.getElementById('step1-indicator').classList.add('completed');
            }

            document.getElementById('prevBtn').style.display = currentStep === 1 ? 'none' : 'block';
            document.getElementById('nextBtn').style.display = currentStep === totalSteps ? 'none' : 'block';
            document.getElementById('submitBtn').style.display = currentStep === totalSteps ? 'block' : 'none';
        }

        function nextStep() {
            if (currentStep < totalSteps) {
                currentStep++;
                updateStep();
            }
        }

        function prevStep() {
            if (currentStep > 1) {
                currentStep--;
                updateStep();
            }
        }

        function submitForm() {
            alert('Registration successful! Welcome to PESO Manolo Fortich!');
        }

        // Terms Modal Functions
        function openTermsModal() {
            document.getElementById('termsModal').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeTermsModal() {
            document.getElementById('termsModal').classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        function acceptTerms() {
            closeTermsModal();
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('termsModal');
            if (event.target === modal) {
                closeTermsModal();
            }
        }

        updateStep();
    </script>
</body>
</html>