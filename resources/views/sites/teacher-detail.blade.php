<x-my-layouts.main-layout>
    <div class="fixed top-0 left-1/2 -translate-x-1/2 w-full h-full -z-10 pointer-events-none">
        <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-lime-500/5 blur-[120px] rounded-full"></div>
    </div>

    <main class="max-w-7xl mx-auto px-6 py-12 lg:py-20">
        <nav class="flex items-center gap-2 text-[10px] font-black uppercase tracking-widest text-gray-500 mb-10">
            <a href="/" class="hover:text-lime-400">Home</a>
            <span>/</span>
            <a href="/instructors" class="hover:text-lime-400">Our Experts</a>
            <span>/</span>
            <span class="text-white">Dr. Arsalan Khan</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
            
            <div class="lg:col-span-4 space-y-10 lg:sticky lg:top-10 h-fit">
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-tr from-lime-400 to-emerald-600 rounded-[3rem] blur opacity-20 group-hover:opacity-40 transition duration-1000"></div>
                    <div class="relative bg-[#0F0F0F] p-3 rounded-[3rem] border border-gray-800 shadow-2xl overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?auto=format&fit=crop&q=80&w=800" 
                             alt="Dr. Arsalan Khan" class="w-full rounded-[2.5rem] object-cover aspect-[4/5] grayscale hover:grayscale-0 transition duration-700">
                    </div>
                </div>

                <div class="space-y-6 px-2">
                    <div>
                        <h1 class="text-4xl font-black text-white leading-tight">Dr. Arsalan Khan</h1>
                        <p class="text-lime-400 font-bold uppercase tracking-tighter text-sm mt-1">PhD in Artificial Intelligence • Stanford Alum</p>
                    </div>
                    <p class="text-gray-400 leading-relaxed text-sm">
                        "Breaking language barriers in tech by bringing Silicon Valley AI research to the Urdu/Hindi community."
                    </p>
                    <div class="flex gap-4">
                        <button class="flex-1 bg-lime-accent text-black font-black py-4 rounded-2xl hover:bg-white transition shadow-[0_10px_20px_-10px_rgba(163,230,53,0.5)]">Follow</button>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-8 space-y-20">
                
                <section>
                    <div class="flex items-end justify-between mb-10">
                        <div>
                            <h3 class="text-3xl font-black text-white italic tracking-tighter">Premium Masterclasses</h3>
                            <p class="text-gray-500 text-sm mt-2 font-medium tracking-wide">Industry-grade certification programs</p>
                        </div>
                        <div class="hidden md:flex gap-2">
                            <div class="w-10 h-10 border border-gray-800 rounded-full flex items-center justify-center text-gray-500 cursor-not-allowed">←</div>
                            <div class="w-10 h-10 border border-gray-800 rounded-full flex items-center justify-center text-white hover:border-lime-400 cursor-pointer transition">→</div>
                        </div>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="group bg-[#111111] border border-gray-800 p-4 rounded-[2.5rem] hover:border-lime-500/40 transition-all duration-500 flex flex-col">
                            <div class="relative aspect-[16/10] rounded-[2rem] overflow-hidden mb-6">
                                <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?auto=format&fit=crop&q=80&w=600" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#111111] via-transparent to-transparent opacity-60"></div>
                                <div class="absolute top-4 left-4 flex gap-2">
                                    <span class="px-3 py-1 bg-lime-400 text-black text-[10px] font-black uppercase rounded-full">Best Seller</span>
                                    <span class="px-3 py-1 bg-black/50 backdrop-blur-md text-white text-[10px] font-bold rounded-full border border-white/10">24h+ Content</span>
                                </div>
                            </div>

                            <div class="px-4 flex-1">
                                <div class="flex justify-between items-start mb-3">
                                    <h4 class="text-xl font-bold text-white group-hover:text-lime-400 transition">Mastering ChatGPT & Prompting</h4>
                                    <div class="flex flex-col items-end">
                                        <span class="text-2xl font-black text-white">$49.99</span>
                                        <span class="text-[10px] text-gray-500 line-through">$129.99</span>
                                    </div>
                                </div>
                                
                                <p class="text-gray-400 text-sm leading-relaxed mb-6">
                                    Go beyond simple chat. Learn multi-step reasoning, custom GPTs, and API integration with advanced prompt engineering frameworks.
                                </p>

                                <div class="space-y-3 mb-8">
                                    <div class="flex items-center gap-2 text-[11px] text-gray-500 font-bold uppercase tracking-wider">
                                        <span class="text-lime-400 text-lg">✓</span> 3 Real-world AI Projects
                                    </div>
                                    <div class="flex items-center gap-2 text-[11px] text-gray-500 font-bold uppercase tracking-wider">
                                        <span class="text-lime-400 text-lg">✓</span> API & Python Workflows
                                    </div>
                                </div>
                            </div>

                            <div class="px-2 pb-2">
                                <a href="{{ route('course-detail') }}" class="block">
                                    <button class="w-full py-4 bg-gray-800/50 text-white group-hover:bg-lime-accent group-hover:text-black font-black text-xs uppercase tracking-widest rounded-2xl transition-all duration-300">
                                        Explore Curriculum
                                    </button>
                                </a>
                            </div>
                        </div>

                        <div class="group bg-[#111111] border border-gray-800 p-4 rounded-[2.5rem] hover:border-lime-500/40 transition-all duration-500 flex flex-col">
                            <div class="relative aspect-[16/10] rounded-[2rem] overflow-hidden mb-6">
                                <img src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&q=80&w=600" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#111111] via-transparent to-transparent opacity-60"></div>
                                <div class="absolute top-4 left-4">
                                    <span class="px-3 py-1 bg-black/50 backdrop-blur-md text-white text-[10px] font-bold rounded-full border border-white/10">40h+ Content</span>
                                </div>
                            </div>

                            <div class="px-4 flex-1">
                                <div class="flex justify-between items-start mb-3">
                                    <h4 class="text-xl font-bold text-white group-hover:text-lime-400 transition">Deep Learning with TensorFlow</h4>
                                    <div class="flex flex-col items-end">
                                        <span class="text-2xl font-black text-white">$89.99</span>
                                        <span class="text-[10px] text-gray-500 line-through">$199.99</span>
                                    </div>
                                </div>
                                
                                <p class="text-gray-400 text-sm leading-relaxed mb-6">
                                    A mathematically rigorous dive into Neural Networks. Build CNNs, RNNs, and Transformers from scratch using TensorFlow 2.0.
                                </p>

                                <div class="space-y-3 mb-8">
                                    <div class="flex items-center gap-2 text-[11px] text-gray-500 font-bold uppercase tracking-wider">
                                        <span class="text-lime-400 text-lg">✓</span> Advanced Math Intuition
                                    </div>
                                    <div class="flex items-center gap-2 text-[11px] text-gray-500 font-bold uppercase tracking-wider">
                                        <span class="text-lime-400 text-lg">✓</span> GPU Optimization Tips
                                    </div>
                                </div>
                            </div>

                            <div class="px-2 pb-2">
                                <a href="#" class="block">
                                    <button class="w-full py-4 bg-gray-800/50 text-white group-hover:bg-lime-accent group-hover:text-black font-black text-xs uppercase tracking-widest rounded-2xl transition-all duration-300">
                                        Explore Curriculum
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                </div>
        </div>
    </main>
</x-my-layouts.main-layout>