<x-my-layouts.main-layout>
    <div class="fixed top-0 left-0 w-full h-full -z-10 overflow-hidden pointer-events-none">
        <div class="absolute top-[10%] right-[-5%] w-[30%] h-[30%] bg-lime-500/10 blur-[120px] rounded-full"></div>
        <div class="absolute bottom-[10%] left-[-5%] w-[30%] h-[30%] bg-blue-500/5 blur-[120px] rounded-full"></div>
    </div>

    <main class="max-w-7xl mx-auto px-6 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <div class="lg:col-span-8 space-y-16">
                <header class="space-y-6">
                    <nav class="flex items-center gap-2 text-[10px] font-black uppercase tracking-[0.2em] text-gray-500">
                        <a href="#" class="hover:text-lime-400">Courses</a>
                        <span>/</span>
                        <a href="#" class="hover:text-lime-400">AI & ML</a>
                        <span>/</span>
                        <span class="text-white">Mastering ChatGPT</span>
                    </nav>
                    
                    <h1 class="text-5xl md:text-7xl font-black leading-[1.1] text-white">
                        Mastering ChatGPT: <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-lime-400 to-emerald-500">Prompt Engineering</span>
                    </h1>
                    
                    <p class="text-gray-400 text-xl leading-relaxed max-w-2xl">
                        Unlock the full potential of Generative AI. This course takes you from a beginner to an expert in crafting prompts that deliver high-quality results.
                    </p>
                </header>

                <div class="relative group cursor-pointer overflow-hidden rounded-[2.5rem] border border-white/10 shadow-2xl">
                    <div class="aspect-video bg-[#0A0A0A] flex items-center justify-center">
                        <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?auto=format&fit=crop&q=80&w=1200" 
                             class="w-full h-full object-cover opacity-40 group-hover:scale-105 transition duration-700" alt="Course Preview">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
                        <div class="absolute flex flex-col items-center">
                            <div class="bg-lime-accent p-6 rounded-full shadow-[0_0_30px_rgba(163,230,53,0.5)] group-hover:scale-110 transition duration-300">
                                <svg class="w-8 h-8 text-black ml-1" fill="currentColor" viewBox="0 0 20 20"><path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.333-5.89a1.5 1.5 0 000-2.538L6.3 2.841z"/></svg>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="lg:col-span-4 relative">
                <div class="sticky top-10 space-y-6">
                    <div class="relative group">
                        <div class="absolute -inset-1 bg-gradient-to-b from-lime-400/20 to-blue-500/20 rounded-[2.5rem] blur-xl opacity-50"></div>
                        
                        <div class="relative bg-white/[0.03] backdrop-blur-2xl p-8 rounded-[2.5rem] border border-white/10 shadow-2xl">
                            <div class="flex items-baseline gap-3 mb-8">
                                <span class="text-4xl font-black text-white">$49.99</span>
                                <span class="text-gray-500 line-through text-lg">$129.00</span>
                            </div>
                            
                            <div class="space-y-4 mb-8">
                                <div class="flex items-center gap-3 text-sm text-gray-300">
                                    <div class="w-5 h-5 text-lime-accent flex items-center justify-center bg-lime-400/10 rounded-full text-[10px]">✓</div>
                                    <span>Full lifetime access</span>
                                </div>
                                <div class="flex items-center gap-3 text-sm text-gray-300">
                                    <div class="w-5 h-5 text-lime-accent flex items-center justify-center bg-lime-400/10 rounded-full text-[10px]">✓</div>
                                    <span>Certificate of completion</span>
                                </div>
                            </div>

                            <button class="w-full bg-lime-accent hover:bg-white text-black font-black py-5 rounded-2xl transition-all shadow-[0_20px_40px_-15px_rgba(163,230,53,0.5)] active:scale-95">
                                Enroll Now
                            </button>
                        </div>
                    </div>

                    <div class="bg-[#111111]/50 backdrop-blur-md p-6 rounded-[2rem] border border-gray-800 flex items-center gap-4">
                        <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?auto=format&fit=crop&q=80&w=200" class="w-14 h-14 rounded-2xl object-cover grayscale">
                        <div>
                            <div class="font-bold text-white text-sm">Dr. Arsalan Khan</div>
                            <p class="text-[10px] text-gray-500 uppercase font-black tracking-widest">AI Lead @ Google</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="mt-32 pt-16 border-t border-gray-800/50">
            <div class="flex items-end justify-between mb-12">
                <div>
                    <h3 class="text-sm font-black text-lime-400 uppercase tracking-[0.3em] mb-2">Explore More</h3>
                    <h2 class="text-4xl font-black text-white">Related Masterclasses</h2>
                </div>
                <a href="#" class="text-gray-400 hover:text-white font-bold transition flex items-center gap-2">
                    View All <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="group relative bg-[#111111] border border-gray-800 rounded-[2.5rem] p-6 hover:border-lime-400/50 transition-all duration-500">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-6 bg-gray-800">
                        <img src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&q=80&w=600" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    <span class="text-[10px] font-black text-lime-400 uppercase tracking-widest">Data Science</span>
                    <h4 class="text-xl font-bold text-white mt-2 group-hover:text-lime-400 transition">Python for Deep Learning</h4>
                    <div class="mt-6 flex items-center justify-between border-t border-gray-800 pt-6">
                        <span class="text-xl font-black text-white">$59.99</span>
                        <button class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center group-hover:bg-lime-accent group-hover:text-black transition">
                            →
                        </button>
                    </div>
                </div>

                <div class="group relative bg-[#111111] border border-gray-800 rounded-[2.5rem] p-6 hover:border-lime-400/50 transition-all duration-500">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-6 bg-gray-800">
                        <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=600" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    <span class="text-[10px] font-black text-lime-400 uppercase tracking-widest">Cybersecurity</span>
                    <h4 class="text-xl font-bold text-white mt-2 group-hover:text-lime-400 transition">AI-Powered Security Ops</h4>
                    <div class="mt-6 flex items-center justify-between border-t border-gray-800 pt-6">
                        <span class="text-xl font-black text-white">$74.99</span>
                        <button class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center group-hover:bg-lime-accent group-hover:text-black transition">
                            →
                        </button>
                    </div>
                </div>

                <div class="group relative bg-[#111111] border border-gray-800 rounded-[2.5rem] p-6 hover:border-lime-400/50 transition-all duration-500">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-6 bg-gray-800">
                        <img src="https://images.unsplash.com/photo-1614741118887-7a4ee193a5fa?auto=format&fit=crop&q=80&w=600" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    <span class="text-[10px] font-black text-lime-400 uppercase tracking-widest">Web Dev</span>
                    <h4 class="text-xl font-bold text-white mt-2 group-hover:text-lime-400 transition">Next.js 15 & AI Integration</h4>
                    <div class="mt-6 flex items-center justify-between border-t border-gray-800 pt-6">
                        <span class="text-xl font-black text-white">$39.99</span>
                        <button class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center group-hover:bg-lime-accent group-hover:text-black transition">
                            →
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-my-layouts.main-layout>