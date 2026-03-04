<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PESO JOB PORTAL SYSTEM | Manolo Fortich, Bukidnon</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome for professional icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Poppins', sans-serif;
        }
        .bg-pattern {
            background-color: #f8fafc;
            background-image: radial-gradient(#1e3a8a 0.5px, transparent 0.5px), radial-gradient(#1e3a8a 0.5px, #f8fafc 0.5px);
            background-size: 20px 20px;
            background-position: 0 0, 10px 10px;
            opacity: 0.1;
        }
        .hero-gradient {
            background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 50%, #dc2626 100%);
        }
        .ra-badge {
            background: linear-gradient(135deg, #1e3a8a, #dc2626);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Top Bar with LGU Info and Logo -->
    <div class="bg-blue-900 text-white py-2 text-sm">
        <div class="max-w-7xl mx-auto px-4 flex justify-between">
            <div class="flex items-center space-x-2">
                <img src="/images/LGU.jpg" alt="LGU Logo" class="h-6 w-auto rounded">
                <span>Republic of the Philippines | Province of Bukidnon</span>
            </div>
            <div class="space-x-4">
                <span>📞 (088) 123-4567</span>
                <span>✉️ peso@manolofortich.gov.ph</span>
            </div>
        </div>
    </div>

    <!-- Main Navigation with Logo -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center space-x-3">
                    <!-- PESO Logo Image -->
                   <img src="/images/peso-logo.jpg" alt="PESO Logo" class="w-12 h-12 rounded-lg shadow-lg object-cover">
                    <div>
                        <h1 class="font-bold text-gray-800">Public Employment Service Office</h1>
                        <p class="text-xs text-gray-500">Manolo Fortich, Bukidnon</p>
                    </div>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="text-gray-700 hover:text-blue-900 font-medium transition">HOME</a>
                    <a href="#history" class="text-gray-700 hover:text-blue-900 font-medium transition">HISTORY</a>
                    <a href="#services" class="text-gray-700 hover:text-blue-900 font-medium transition">SERVICES</a>
                    <a href="#ra" class="text-gray-700 hover:text-blue-900 font-medium transition">R.A. 8759</a>
                    <a href="#contact" class="text-gray-700 hover:text-blue-900 font-medium transition">CONTACT</a>
                </div>
                <div class="flex space-x-3">
                    <a href="/login" class="border-2 border-blue-900 text-blue-900 px-5 py-2 rounded-lg font-semibold hover:bg-blue-900 hover:text-white transition">LOGIN</a>
                    <a href="/register" class="bg-red-600 text-white px-5 py-2 rounded-lg font-semibold hover:bg-red-700 transition">REGISTER</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header id="home" class="relative text-white overflow-hidden min-h-[600px] flex items-center">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0">
            <img src="/images/eagle.png" alt="Background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/40"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 py-24 w-full">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-block bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm mb-6">
                        Public Employment Service Office
                    </div>
                    
                    <h1 class="text-5xl font-bold mb-2">PESO Job Portal System</h1>
                    <h2 class="text-2xl mb-6 text-yellow-300">Manolo Fortich, Bukidnon</h2>
                    
                    <p class="text-lg mb-8 opacity-90">
                        Bridging job seekers and employers in the Municipality of Manolo Fortich 
                        through efficient, accessible, and free employment services.
                    </p>
                    
                    <div class="flex space-x-4">
                        <!-- Buttons can go here -->
                    </div>
                </div>
                
                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-2xl border border-white/20">
                    <div class="grid grid-cols-2 gap-4 stats-grid">
                        <div class="text-center">
                            <div class="stat-number text-4xl font-bold" data-target="500">0</div>
                            <div class="text-sm">Job Seekers</div>
                        </div>
                        <div class="text-center">
                            <div class="stat-number text-4xl font-bold" data-target="50">0</div>
                            <div class="text-sm">Employers</div>
                        </div>
                        <div class="text-center">
                            <div class="stat-number text-4xl font-bold" data-target="300">0</div>
                            <div class="text-sm">Jobs Posted</div>
                        </div>
                        <div class="text-center">
                            <div class="stat-number text-4xl font-bold" data-target="85">0</div>
                            <div class="text-sm">Placement Rate</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- History Section with Old Building Background -->
    <section id="history" class="relative overflow-hidden py-20">
        <!-- Background Image without overlay -->
        <div class="absolute inset-0">
            <img src="/images/oldbuilding.jpg" alt="Old Building" class="w-full h-full object-cover">
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 z-10">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-white mb-2 drop-shadow-lg">HISTORY OF PESO</h2>
                <div class="w-24 h-1 bg-red-600 mx-auto"></div>
                <p class="text-white drop-shadow-lg mt-4">Public Employment Service Office in Manolo Fortich</p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <div class="flex items-start space-x-4 bg-white/90 backdrop-blur-sm p-4 rounded-xl shadow-lg">
                        <div class="bg-blue-900 text-white rounded-full w-12 h-12 flex items-center justify-center font-bold text-xl flex-shrink-0">1999</div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Establishment of PESO</h3>
                            <p class="text-gray-600">PESO was established nationwide through Republic Act No. 8759, also known as the "PESO Act of 1999," mandating all Local Government Units to establish their own Public Employment Service Office.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4 bg-white/90 backdrop-blur-sm p-4 rounded-xl shadow-lg">
                        <div class="bg-red-600 text-white rounded-full w-12 h-12 flex items-center justify-center font-bold text-xl flex-shrink-0">2001</div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">PESO Manolo Fortich</h3>
                            <p class="text-gray-600">The Local Government Unit of Manolo Fortich established its PESO office to serve the growing employment needs of its constituents, starting with just two personnel and manual job matching services.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4 bg-white/90 backdrop-blur-sm p-4 rounded-xl shadow-lg">
                        <div class="bg-blue-900 text-white rounded-full w-12 h-12 flex items-center justify-center font-bold text-xl flex-shrink-0">2015</div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Digitization Initiative</h3>
                            <p class="text-gray-600">PESO Manolo Fortich began its digital transformation, implementing a computerized job matching system to serve more job seekers and employers efficiently.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4 bg-white/90 backdrop-blur-sm p-4 rounded-xl shadow-lg">
                        <div class="bg-red-600 text-white rounded-full w-12 h-12 flex items-center justify-center font-bold text-xl flex-shrink-0">2024</div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">PESO Job Portal Launch</h3>
                            <p class="text-gray-600">Launch of the online PESO Job Portal System, allowing job seekers and employers to connect anytime, anywhere, marking a new era of employment services in Manolo Fortich.</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white/90 backdrop-blur-md p-8 rounded-2xl shadow-xl border border-gray-200">
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Mission & Vision</h3>
                    <div class="space-y-4">
                        <div>
                            <h4 class="font-bold text-blue-900">Mission</h4>
                            <p class="text-gray-600">To provide efficient, accessible, and quality employment services to all job seekers and employers in Manolo Fortich.</p>
                        </div>
                        <div>
                            <h4 class="font-bold text-blue-900">Vision</h4>
                            <p class="text-gray-600">A leading employment service office that contributes to the economic development of Manolo Fortich through full employment and decent work for all.</p>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="text-sm italic text-gray-600">"Serving the job seekers and employers of Manolo Fortich with integrity and excellence."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- RA 8759 Section -->
    <section id="ra" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="ra-badge inline-block text-white px-4 py-2 rounded-full text-sm mb-4">Republic Act No. 8759</div>
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">The PESO Act of 1999</h2>
                    <p class="text-gray-600 mb-6">An Act Establishing a Public Employment Service Office in All Local Government Units, and for Other Purposes</p>
                    
                    <div class="space-y-4">
                        <div class="bg-white p-4 rounded-lg shadow-md">
                            <h3 class="font-bold text-blue-900">Section 1. Title</h3>
                            <p class="text-sm text-gray-600">This Act shall be known as the "Public Employment Service Office Act of 1999" or the "PESO Act of 1999."</p>
                        </div>
                        
                        <div class="bg-white p-4 rounded-lg shadow-md">
                            <h3 class="font-bold text-blue-900">Section 2. Declaration of Policy</h3>
                            <p class="text-sm text-gray-600">It is the policy of the State to promote full employment and equality of employment opportunities for all. Towards this end, it shall provide employment services to job seekers, particularly the disadvantaged workers.</p>
                        </div>
                        
                        <div class="bg-white p-4 rounded-lg shadow-md">
                            <h3 class="font-bold text-blue-900">Section 3. Establishment of PESO</h3>
                            <p class="text-sm text-gray-600">There is hereby established in all provincial, city and municipal governments a Public Employment Service Office, hereinafter referred to as PESO, which shall be under the administrative supervision of the local chief executive.</p>
                        </div>
                        
                        <div class="bg-white p-4 rounded-lg shadow-md">
                            <h3 class="font-bold text-blue-900">Amendment: RA 10691</h3>
                            <p class="text-sm text-gray-600">Amended in 2015 to strengthen the PESO program and expand its services to include overseas employment facilitation and reintegration programs for OFWs.</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-blue-900 text-white p-8 rounded-2xl shadow-xl">
                    <div class="text-center mb-6">
                        <div class="text-6xl mb-2">📜</div>
                        <h3 class="text-2xl font-bold">Key Provisions</h3>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-2">
                            <span class="text-red-400 font-bold">•</span>
                            <span>Mandatory establishment in all LGUs</span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <span class="text-red-400 font-bold">•</span>
                            <span>Free employment services for job seekers</span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <span class="text-red-400 font-bold">•</span>
                            <span>Job matching and referral services</span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <span class="text-red-400 font-bold">•</span>
                            <span>Labor market information dissemination</span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <span class="text-red-400 font-bold">•</span>
                            <span>Guidance and counseling for workers</span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <span class="text-red-400 font-bold">•</span>
                            <span>Placement and referral for local and overseas employment</span>
                        </li>
                    </ul>
                    <div class="mt-6 pt-4 border-t border-white/30 text-center text-sm">
                        <p>Approved: November 7, 1999</p>
                        <p class="text-yellow-300">"Batas para sa Hanapbuhay ng Bawat Pilipino"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-blue-900 mb-2">PESO Services</h2>
                <div class="w-24 h-1 bg-red-600 mx-auto"></div>
                <p class="text-gray-600 mt-4">Comprehensive employment assistance for every Manolofortichanon</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Add service-card class to each service div -->
                <div class="service-card bg-white p-6 rounded-xl shadow-lg border-t-4 border-blue-900 hover:shadow-2xl transition">
                    <div class="text-5xl mb-4">💼</div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2">Job Placement</h3>
                    <p class="text-gray-600 mb-4">Free job matching and referral services to local and overseas employers.</p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li>✓ Local Employment</li>
                        <li>✓ Overseas Employment</li>
                        <li>✓ Government Jobs</li>
                    </ul>
                </div>
                
                <div class="service-card bg-white p-6 rounded-xl shadow-lg border-t-4 border-red-600 hover:shadow-2xl transition">
                    <div class="text-5xl mb-4">📚</div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2">Skills Training</h3>
                    <p class="text-gray-600 mb-4">TESDA-accredited training programs to enhance employability.</p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li>✓ Technical Skills</li>
                        <li>✓ Soft Skills</li>
                        <li>✓ Entrepreneurship</li>
                    </ul>
                </div>
                
                <div class="service-card bg-white p-6 rounded-xl shadow-lg border-t-4 border-blue-900 hover:shadow-2xl transition">
                    <div class="text-5xl mb-4">📋</div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2">Career Counseling</h3>
                    <p class="text-gray-600 mb-4">Professional guidance for students and job seekers.</p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li>✓ Career Guidance</li>
                        <li>✓ Resume Writing</li>
                        <li>✓ Interview Coaching</li>
                    </ul>
                </div>
                
                <div class="service-card bg-white p-6 rounded-xl shadow-lg border-t-4 border-red-600 hover:shadow-2xl transition">
                    <div class="text-5xl mb-4">📊</div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2">Labor Market Info</h3>
                    <p class="text-gray-600 mb-4">Updated information on job opportunities and labor trends.</p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li>✓ Job Fairs</li>
                        <li>✓ Industry Trends</li>
                        <li>✓ Salary Guides</li>
                    </ul>
                </div>
                
                <div class="service-card bg-white p-6 rounded-xl shadow-lg border-t-4 border-blue-900 hover:shadow-2xl transition">
                    <div class="text-5xl mb-4">🤝</div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2">Employer Services</h3>
                    <p class="text-gray-600 mb-4">Assistance for companies seeking qualified workers.</p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li>✓ Recruitment Assistance</li>
                        <li>✓ Job Fair Participation</li>
                        <li>✓ Skills Matching</li>
                    </ul>
                </div>
                
                <div class="service-card bg-white p-6 rounded-xl shadow-lg border-t-4 border-red-600 hover:shadow-2xl transition">
                    <div class="text-5xl mb-4">🎯</div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2">Special Programs</h3>
                    <p class="text-gray-600 mb-4">Targeted programs for specific sectors.</p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li>✓ Youth Employment</li>
                        <li>✓ PWD Assistance</li>
                        <li>✓ OFW Reintegration</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h2 class="text-4xl font-bold text-blue-900 mb-4">Visit PESO Manolo Fortich</h2>
                    <div class="w-24 h-1 bg-red-600 mb-6"></div>
                    <p class="text-gray-600 mb-8">We are here to serve you! Visit our office or contact us through the following:</p>
                    
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4">
                            <div class="bg-blue-900 text-white p-3 rounded-full">
                                📍
                            </div>
                            <div>
                                <h3 class="font-bold">Address</h3>
                                <p class="text-gray-600">Old Motorpool<br>Poblacion, Manolo Fortich, Bukidnon 8703</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="bg-red-600 text-white p-3 rounded-full">
                                📞
                            </div>
                            <div>
                                <h3 class="font-bold">Contact Numbers</h3>
                                <p class="text-gray-600">(088) 123-4567 | 0917 123 4567</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="bg-blue-900 text-white p-3 rounded-full">
                                ✉️
                            </div>
                            <div>
                                <h3 class="font-bold">Email</h3>
                                <p class="text-gray-600">peso@manolofortich.gov.ph</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="bg-red-600 text-white p-3 rounded-full">
                                🕒
                            </div>
                            <div>
                                <h3 class="font-bold">Office Hours</h3>
                                <p class="text-gray-600">Monday - Friday: 8:00 AM - 5:00 PM<br>Saturday: 8:00 AM - 12:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gradient-to-br from-blue-900 to-red-600 text-white p-8 rounded-2xl shadow-xl">
                    <h3 class="text-2xl font-bold mb-4">Send Us a Message</h3>
                    <form class="space-y-4">
                        <input type="text" placeholder="Your Name" class="w-full p-3 rounded-lg text-gray-800">
                        <input type="email" placeholder="Your Email" class="w-full p-3 rounded-lg text-gray-800">
                        <input type="text" placeholder="Subject" class="w-full p-3 rounded-lg text-gray-800">
                        <textarea rows="4" placeholder="Your Message" class="w-full p-3 rounded-lg text-gray-800"></textarea>
                        <button class="bg-white text-blue-900 px-6 py-3 rounded-lg font-bold hover:bg-gray-100 transition w-full">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer with Logo -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <!-- PESO Logo in Footer -->
                        <img src="/images/peso-logo.jpg" alt="PESO Logo" class="w-10 h-10 rounded-lg object-cover">
                        <span class="font-bold text-lg">PESO Job Portal</span>
                    </div>
                    <p class="text-sm text-gray-400">The official Public Employment Service Office of Manolo Fortich, Bukidnon.</p>
                </div>
                
                <div>
                    <h4 class="font-bold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#home" class="hover:text-white">Home</a></li>
                        <li><a href="#history" class="hover:text-white">History</a></li>
                        <li><a href="#services" class="hover:text-white">Services</a></li>
                        <li><a href="#ra" class="hover:text-white">R.A. 8759</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-bold mb-4">Services</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-white">Job Placement</a></li>
                        <li><a href="#" class="hover:text-white">Skills Training</a></li>
                        <li><a href="#" class="hover:text-white">Career Counseling</a></li>
                        <li><a href="#" class="hover:text-white">Employer Services</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-bold mb-4">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-gray-800 w-10 h-10 rounded-full flex items-center justify-center hover:bg-blue-900 transition">FB</a>
                        <a href="#" class="bg-gray-800 w-10 h-10 rounded-full flex items-center justify-center hover:bg-blue-900 transition">TW</a>
                        <a href="#" class="bg-gray-800 w-10 h-10 rounded-full flex items-center justify-center hover:bg-blue-900 transition">IG</a>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-4 text-center text-sm text-gray-400">
                <p>© 2026 Public Employment Service Office - Manolo Fortich. All rights reserved.</p>
                <p class="mt-2">In partnership with the Department of Labor and Employment (DOLE) and the Local Government Unit of Manolo Fortich.</p>
            </div>
        </div>
    </footer>
    
    <!-- JavaScript -->
    <script src="/js/script.js"></script>
</body>
</html>