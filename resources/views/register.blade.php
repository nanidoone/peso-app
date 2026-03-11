<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration | PESO Manolo Fortich</title>
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
            max-width: 500px;
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
        
        .step-line {
            position: absolute;
            top: 20px;
            left: 50%;
            width: 100%;
            height: 3px;
            background: rgba(255, 255, 255, 0.3);
            z-index: -1;
        }
        
        .form-container {
            max-width: 800px;
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
            box-shadow: 0 10px 15px -3px rgba(30, 58, 138, 0.4);
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
            background: linear-gradient(135deg, #1e3a8a, #dc2626);
            color: white;
            padding: 1rem;
            border-radius: 1rem;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            border: none;
            width: 100%;
            cursor: pointer;
        }
        
        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px -5px rgba(220, 38, 38, 0.4);
        }
        
        .data-privacy-box {
            background: linear-gradient(135deg, rgba(30, 58, 138, 0.05), rgba(220, 38, 38, 0.05));
            border: 2px solid rgba(30, 58, 138, 0.2);
            border-radius: 1rem;
            padding: 1.5rem;
            margin: 1.5rem 0;
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
    <!-- Background pattern overlay -->
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
                <div class="relative">
                    <img src="/images/peso-logo.jpg" alt="PESO" class="w-20 h-20 rounded-2xl shadow-2xl border-4 border-white">
                    <div class="absolute -bottom-2 -right-2 bg-gradient-to-r from-blue-900 to-red-600 text-white w-8 h-8 rounded-full flex items-center justify-center text-xl shadow-lg">
                        <i class="fas fa-check"></i>
                    </div>
                </div>
            </div>
            <h1 class="text-4xl font-bold text-white drop-shadow-lg">Create Account</h1>
            <p class="text-white/90 mt-2 drop-shadow">Join PESO Manolo Fortich in 3 easy steps</p>
        </div>

        <!-- Step Indicator -->
        <div class="step-indicator">
            <div class="step active" id="step1-indicator">
                <div class="step-number">1</div>
                <div class="step-label">Account</div>
                <div class="step-line"></div>
            </div>
            <div class="step" id="step2-indicator">
                <div class="step-number">2</div>
                <div class="step-label">Personal</div>
                <div class="step-line"></div>
            </div>
            <div class="step" id="step3-indicator">
                <div class="step-number">3</div>
                <div class="step-label">NSRP Form</div>
            </div>
        </div>

        <!-- Form Container -->
        <div class="form-container">
            <!-- Step 1: Account Details -->
            <div class="form-step active" id="step1">
                <h2 class="text-2xl font-bold text-blue-900 mb-6 flex items-center">
                    <i class="fas fa-user-circle mr-3 text-red-600"></i> Account Information
                </h2>
                
                <div class="space-y-4">
                    <div>
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-input" placeholder="Juan Dela Cruz">
                    </div>
                    <div>
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-input" placeholder="juan@example.com">
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="form-label">Password</label>
                            <input type="password" class="form-input" placeholder="********">
                        </div>
                        <div>
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-input" placeholder="********">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 2: Personal Details -->
            <div class="form-step" id="step2">
                <h2 class="text-2xl font-bold text-blue-900 mb-6 flex items-center">
                    <i class="fas fa-id-card mr-3 text-red-600"></i> Personal Information
                </h2>
                
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
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="form-label">City</label>
                            <input type="text" class="form-input" value="Manolo Fortich" readonly>
                        </div>
                        <div>
                            <label class="form-label">Province</label>
                            <input type="text" class="form-input" value="Bukidnon" readonly>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 3: NSRP Establishment Form -->
            <div class="form-step" id="step3">
                <h2 class="text-2xl font-bold text-blue-900 mb-2 flex items-center">
                    <i class="fas fa-building mr-3 text-red-600"></i> NSRP Form 2
                </h2>
                <p class="text-sm text-gray-500 mb-6">Based on DOLE National Skills Registration Program</p>

                <div class="nsrp-section">
                    <!-- Establishment Details -->
                    <h3 class="nsrp-title">I. ESTABLISHMENT DETAILS</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="form-label">Business Name</label>
                            <input type="text" class="form-input" placeholder="e.g., ABC Corporation">
                        </div>
                        <div>
                            <label class="form-label">Trade Name</label>
                            <input type="text" class="form-input" placeholder="e.g., ABC Store">
                        </div>
                        <div>
                            <label class="form-label">TIN</label>
                            <input type="text" class="form-input" placeholder="123-456-789-000">
                        </div>
                        <div>
                            <label class="form-label">Industry Type</label>
                            <select class="form-input">
                                <option>Retail</option>
                                <option>Manufacturing</option>
                                <option>Services</option>
                                <option>Agriculture</option>
                            </select>
                        </div>
                    </div>

                    <!-- Office Type -->
                    <div class="mb-4">
                        <label class="form-label">Office Type</label>
                        <div class="flex gap-4">
                            <label class="checkbox-item"><input type="checkbox"> Main office</label>
                            <label class="checkbox-item"><input type="checkbox"> Branch</label>
                        </div>
                    </div>

                    <!-- Employer Type -->
                    <div class="mb-4">
                        <label class="form-label">Employer Type</label>
                        <div class="checkbox-grid">
                            <label class="checkbox-item"><input type="radio" name="emp_type"> Public</label>
                            <label class="checkbox-item"><input type="radio" name="emp_type"> Private</label>
                            <label class="checkbox-item"><input type="radio" name="emp_type"> LGU</label>
                            <label class="checkbox-item"><input type="radio" name="emp_type"> NGO</label>
                            <label class="checkbox-item"><input type="radio" name="emp_type"> Government Agency</label>
                        </div>
                    </div>

                    <!-- Work Force -->
                    <div class="mb-4">
                        <label class="form-label">Work Force Size</label>
                        <div class="flex flex-wrap gap-2 mb-2">
                            <span class="tag">Micro (1-9)</span>
                            <span class="tag">Small (10-99)</span>
                            <span class="tag">Medium (100-199)</span>
                            <span class="tag">Large (200+)</span>
                        </div>
                        <select class="form-input">
                            <option>Select workforce size</option>
                            <option>Micro (1-9 employees)</option>
                            <option>Small (10-99 employees)</option>
                            <option>Medium (100-199 employees)</option>
                            <option>Large (200+ employees)</option>
                        </select>
                    </div>

                    <!-- Contact Details -->
                    <h3 class="nsrp-title mt-6">II. CONTACT DETAILS</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="form-label">Owner/President</label>
                            <input type="text" class="form-input" placeholder="Full name">
                        </div>
                        <div>
                            <label class="form-label">Contact Person</label>
                            <input type="text" class="form-input" placeholder="Full name">
                        </div>
                        <div>
                            <label class="form-label">Position</label>
                            <input type="text" class="form-input" placeholder="e.g., HR Manager">
                        </div>
                        <div>
                            <label class="form-label">Contact Number</label>
                            <input type="text" class="form-input" placeholder="0917 123 4567">
                        </div>
                        <div class="md:col-span-2">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-input" placeholder="company@email.com">
                        </div>
                    </div>
                </div>

                <!-- DATA PRIVACY SECTION -->
                <div class="data-privacy-box">
                    <div class="data-privacy-title">
                      
                        Data Privacy Notice
                    </div>
                    
                    <div class="space-y-3 text-sm text-gray-700">
                        <p class="flex items-start gap-2">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span>Republic Act No. 10173 (Data Privacy Act of 2012) requires us to protect your personal information.</span>
                        </p>
                        <p class="flex items-start gap-2">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span>The information collected will be used solely for employment facilitation and program registration purposes by PESO Manolo Fortich.</span>
                        </p>
                        <p class="flex items-start gap-2">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span>Your data will be shared with DOLE and partner government agencies only for employment-related programs.</span>
                        </p>
                        <p class="flex items-start gap-2">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span>You have the right to access, correct, and request deletion of your personal information.</span>
                        </p>
                    </div>

                    <div class="mt-4 p-3 bg-gradient-to-r from-blue-50 to-red-50 rounded-lg border border-blue-200">
                        <p class="text-xs text-gray-700">
                            <i class="fas fa-info-circle text-blue-900 mr-1"></i>
                            By completing this registration, you consent to the collection and processing of your personal information as described above.
                        </p>
                    </div>
                </div>

                <!-- Terms -->
                <div class="space-y-3 mt-4">
                    <label class="flex items-start gap-2 cursor-pointer">
                        <input type="checkbox" id="dataPrivacy" class="w-4 h-4 rounded mt-1">
                        <span class="text-sm text-gray-600">
                            I have read and agree to the <a href="#" class="text-blue-900 font-semibold hover:underline">Data Privacy Policy</a>
                        </span>
                    </label>

                    <label class="flex items-start gap-2 cursor-pointer">
                        <input type="checkbox" id="terms" class="w-4 h-4 rounded mt-1">
                        <span class="text-sm text-gray-600">
                            I confirm that the information provided is true and correct
                        </span>
                    </label>
                </div>

                <p class="text-xs text-gray-400 mt-4 italic">
                    * This form is based on DOLE NSRP Form 2. For official use only.
                </p>
            </div>

            <!-- Navigation Buttons -->
            <div class="flex justify-between mt-8">
                <button type="button" class="btn-nav btn-prev" id="prevBtn" onclick="prevStep()">Previous</button>
                <button type="button" class="btn-nav btn-next" id="nextBtn" onclick="nextStep()">Next</button>
                <button type="button" class="btn-submit" id="submitBtn" onclick="submitForm()" style="display: none;">
                    <i class="fas fa-check-circle mr-2"></i> Submit Registration
                </button>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-gray-900/90 text-white py-6 rounded-2xl max-w-7xl mx-auto mt-8 backdrop-blur-sm">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <p class="text-sm text-gray-300">© 2026 Public Employment Service Office - Manolo Fortich. All rights reserved.</p>
            </div>
        </footer>
    </div>

    <script>
        let currentStep = 1;
        const totalSteps = 3;

        function updateStep() {
            for (let i = 1; i <= totalSteps; i++) {
                document.getElementById(`step${i}`).classList.remove('active');
                document.getElementById(`step${i}-indicator`).classList.remove('active', 'completed');
            }

            document.getElementById(`step${currentStep}`).classList.add('active');
            document.getElementById(`step${currentStep}-indicator`).classList.add('active');

            for (let i = 1; i < currentStep; i++) {
                document.getElementById(`step${i}-indicator`).classList.add('completed');
            }

            document.getElementById('prevBtn').style.display = currentStep === 1 ? 'none' : 'block';
            
            if (currentStep === totalSteps) {
                document.getElementById('nextBtn').style.display = 'none';
                document.getElementById('submitBtn').style.display = 'block';
            } else {
                document.getElementById('nextBtn').style.display = 'block';
                document.getElementById('submitBtn').style.display = 'none';
            }
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
            const dataPrivacyChecked = document.getElementById('dataPrivacy')?.checked;
            const termsChecked = document.getElementById('terms')?.checked;

            if (!dataPrivacyChecked) {
                alert('Please agree to the Data Privacy Policy to continue.');
                return;
            }

            if (!termsChecked) {
                alert('Please confirm that the information is correct.');
                return;
            }

            alert('Registration submitted successfully! Thank you for registering with PESO Manolo Fortich.');
        }

        updateStep();
    </script>
</body>
</html>