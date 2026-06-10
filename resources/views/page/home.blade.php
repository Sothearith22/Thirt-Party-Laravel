<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexus - AI for Enterprise</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#8B5CF6',
                        secondary: '#A855F7',
                        accent: '#C084FC',
                        dark: '#0F0F0F',
                        'dark-secondary': '#1A1A1A',
                        'gray-light': '#6B7280',
                        'gray-lighter': '#9CA3AF'
                    },
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-dark text-white font-sans antialiased">
    <nav class="fixed top-0 w-full z-50 bg-dark/80 backdrop-blur-md border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center space-x-8">
                    <div class="flex items-center space-x-2">
                        <div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        </div>
                        <span class="text-xl font-bold">Web Jor</span>
                    </div>
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="#" class="text-gray-lighter hover:text-white transition-colors">Products</a>
                        <a href="#" class="text-gray-lighter hover:text-white transition-colors">Solutions</a>
                        <a href="#" class="text-gray-lighter hover:text-white transition-colors">Enterprise</a>
                        <a href="#" class="text-gray-lighter hover:text-white transition-colors">Pricing</a>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-gray-lighter hover:text-white transition-colors">Sign in</a>
                    <button class="bg-white text-dark px-4 py-2 rounded-lg font-medium hover:bg-gray-100 transition-colors">
                        Get Started
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <section class="pt-32 pb-20 px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center max-w-4xl mx-auto">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-primary/10 border border-primary/20 mb-8">
                    <span class="text-primary text-sm font-medium">AI for Enterprise</span>
                </div>
                <h1 class="text-5xl lg:text-7xl font-bold mb-8 text-balance">
                    AI for teams building the web
                </h1>
                <p class="text-xl text-gray-lighter mb-12 max-w-2xl mx-auto text-pretty">
                    Empower your entire organization to create at the speed of thought, while ensuring security remains at the forefront.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <button class="bg-white text-dark px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                        Contact Sales
                    </button>
                    <button class="flex items-center space-x-2 px-8 py-4 rounded-lg border border-gray-700 hover:border-gray-600 transition-colors">
                        <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M8 5v10l7-5-7-5z"/>
                            </svg>
                        </div>
                        <span>Watch Demo</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 px-6 lg:px-8 bg-dark-secondary">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold mb-4">Our core principles</h2>
                <p class="text-gray-lighter text-lg max-w-2xl mx-auto">
                    Built for modern teams who demand excellence in every aspect of their workflow.
                </p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <span class="text-4xl font-bold text-primary">1</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Enterprise Ready</h3>
                    <p class="text-gray-lighter">
                        Support enterprises in their transition to sustainable practices with durable solutions.
                    </p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <span class="text-4xl font-bold text-primary">2</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Innovation First</h3>
                    <p class="text-gray-lighter">
                        Accelerate innovation through new projects, positioning as a leader in sustainable solutions.
                    </p>
                </div>
                <div class="text-center md:col-span-2 lg:col-span-1">
                    <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <span class="text-4xl font-bold text-primary">3</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Global Scale</h3>
                    <p class="text-gray-lighter">
                        Built to handle enterprise workloads with security and compliance at the core.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold mb-8">
                    Combine innovation, durability and efficiency
                </h2>
            </div>
            <div class="relative">
                <div class="aspect-video bg-gradient-to-br from-primary/20 to-secondary/20 rounded-2xl overflow-hidden">
                    <img src="/placeholder.svg?height=600&width=1200"
                         alt="Team collaboration"
                         class="w-full h-full object-cover opacity-80">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-dark/60 to-transparent rounded-2xl"></div>
                <div class="absolute bottom-8 left-8 right-8">
                    <p class="text-lg text-white/90 mb-6 max-w-2xl">
                        Nexus positions itself as a key player in the sustainable transition within the enterprise domain.
                        We propose durable solutions for enterprise services.
                    </p>
                    <button class="bg-white text-dark px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                        Learn more
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 px-6 lg:px-8 bg-dark-secondary">
        <div class="max-w-7xl mx-auto">
            <div class="mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold mb-4">
                    A global approach<br>
                    for a future model
                </h2>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="group cursor-pointer">
                    <div class="aspect-square bg-gray-800 rounded-2xl overflow-hidden mb-6 relative">
                        <img src="/placeholder.svg?height=400&width=400"
                             alt="Partnership"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute top-4 right-4 w-8 h-8 bg-white/20 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Strategic Partnerships</h3>
                    <p class="text-gray-lighter">Building lasting relationships with industry leaders.</p>
                </div>
                <div class="group cursor-pointer">
                    <div class="aspect-square bg-gray-800 rounded-2xl overflow-hidden mb-6 relative">
                        <img src="/placeholder.svg?height=400&width=400"
                             alt="Innovation"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute top-4 right-4 w-8 h-8 bg-white/20 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Cutting-edge Technology</h3>
                    <p class="text-gray-lighter">Leveraging the latest advances in AI and machine learning.</p>
                </div>
                <div class="group cursor-pointer">
                    <div class="aspect-square bg-gray-800 rounded-2xl overflow-hidden mb-6 relative">
                        <img src="/placeholder.svg?height=400&width=400"
                             alt="Sustainability"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute top-4 right-4 w-8 h-8 bg-white/20 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Sustainable Future</h3>
                    <p class="text-gray-lighter">Committed to environmental responsibility and sustainability.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl lg:text-4xl font-bold mb-8">
                Let's discuss your project
            </h2>
            <button class="bg-white text-dark px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                Start conversation
            </button>
        </div>
    </section>
    <footer class="bg-dark-secondary py-16 px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-4 gap-8 mb-12">
                <div>
                    <div class="flex items-center space-x-2 mb-6">
                        <div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        </div>
                        <span class="text-xl font-bold">Nexus</span>
                    </div>
                    <p class="text-gray-lighter">
                        Empowering enterprises with AI-driven solutions for the future of work.
                    </p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Products</h4>
                    <ul class="space-y-2 text-gray-lighter">
                        <li><a href="#" class="hover:text-white transition-colors">AI Platform</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Analytics</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Automation</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Integration</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Solutions</h4>
                    <ul class="space-y-2 text-gray-lighter">
                        <li><a href="#" class="hover:text-white transition-colors">Enterprise</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Startups</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Developers</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Agencies</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Company</h4>
                    <ul class="space-y-2 text-gray-lighter">
                        <li><a href="#" class="hover:text-white transition-colors">About</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Careers</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Contact</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Support</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-lighter text-sm">
                    © 2025 Nexus. All rights reserved.
                </p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-lighter hover:text-white transition-colors text-sm">Privacy Policy</a>
                    <a href="#" class="text-gray-lighter hover:text-white transition-colors text-sm">Terms of Service</a>
                    <a href="#" class="text-gray-lighter hover:text-white transition-colors text-sm">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
