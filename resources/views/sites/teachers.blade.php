<x-my-layouts.main-layout>
      <header class="px-10 py-20 text-center max-w-4xl mx-auto">
        <span class="text-xs font-bold tracking-widest uppercase border border-gray-700 px-4 py-1.5 rounded-full text-gray-400">
            Learn from the Best
        </span>
        <h1 class="text-5xl md:text-6xl font-bold mt-8 leading-tight">
            Meet Our <span class="lime-accent">Expert Mentors</span>
        </h1>
        <p class="text-gray-400 mt-6 text-lg">
            Humare teachers sirf educators nahi, balki industry experts hain jo aapko AI ki duniya mein kamyab banayenge.
        </p>
    </header>

    <section class="px-10 pb-24 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            
<div class="relative group max-w-sm">
    <div class="absolute inset-0 bg-lime-500/10 rounded-[3rem] blur-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

    <div class="relative bg-white/[0.03] backdrop-blur-xl rounded-[3rem] border border-white/10 shadow-2xl overflow-hidden hover:border-lime-400/40 transition-all duration-500">
        
        <div class="p-4">
            <div class="relative w-full aspect-square rounded-[2.5rem] overflow-hidden bg-white/5 border border-white/10">
                <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?auto=format&fit=crop&q=80&w=600" 
                     alt="Instructor" 
                     class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-700">
                
                <div class="absolute bottom-5 left-5 bg-white/10 backdrop-blur-md px-4 py-2 rounded-2xl text-[10px] font-black text-white uppercase tracking-tighter border border-white/20 flex items-center gap-2">
                    <span class="text-lime-400">★</span> 4.9 Instructor Rating
                </div>
            </div>
        </div>
        
        <div class="p-8 pt-4">
            <div class="space-y-1">
                <h3 class="text-3xl font-black text-white tracking-tight">Dr. Arsalan Khan</h3>
                <p class="text-lime-400 text-xs font-black uppercase tracking-[0.2em]">Mastering ChatGPT</p>
            </div>
            
            <p class="text-gray-400 text-sm mt-4 leading-relaxed font-medium">
                Arsalan is an AI Research Scientist with over 10 years of experience in Natural Language Processing and Generative AI.
            </p>
            
            <div class="mt-8 pt-6 border-t border-white/5 flex items-center justify-between">
                <div>
                    <span class="block text-[10px] text-gray-500 font-bold uppercase">Course Price</span>
                    <span class="text-2xl font-black text-white">$49.99</span>
                </div>
                <a href="{{ route('teacher-detail') }}" class="group/link flex items-center gap-1 text-xs font-bold text-gray-400 hover:text-white transition">
                    Read More 
                    <svg class="w-4 h-4 group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
            
            <button class="w-full mt-8 bg-lime-accent hover:bg-white text-black font-black py-4 rounded-2xl shadow-[0_15px_30px_-10px_rgba(163,230,53,0.4)] active:scale-95 transition-all duration-300">
                Add to Cart
            </button>
        </div>
    </div>
</div>

            

        </div>
    </section>
    </x-my-layouts.main-layout>

    