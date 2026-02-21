<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI_Sekho - Modern Learning</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .lime-accent { color: #D4FF5E; }
        .bg-lime-accent { background-color: #D4FF5E; }
    </style>
</head>
<body class="bg-[#0F0F0F] text-white">
<div class="fixed top-0 left-0 w-full h-full -z-10 overflow-hidden pointer-events-none">
        <div class="absolute top-[-5%] left-[-5%] w-[45%] h-[45%] bg-lime-500/10 blur-[120px] rounded-full"></div>
        <div class="absolute bottom-[-5%] right-[-5%] w-[40%] h-[40%] bg-emerald-500/5 blur-[120px] rounded-full"></div>
    </div>

    <div class="min-h-[90vh] flex flex-col items-center justify-center px-6 py-12">
        
        <div class="text-center mb-10">
            <div class="inline-block px-4 py-1.5 mb-4 border border-lime-500/30 rounded-full bg-lime-500/5">
                <span class="text-[10px] font-black text-lime-400 uppercase tracking-[0.3em]">New Account Registration</span>
            </div>
            <h1 class="text-4xl md:text-5xl font-black text-white uppercase tracking-tighter">Join the Academy</h1>
            <p class="text-gray-500 text-sm font-medium mt-2 uppercase tracking-widest">Start your journey into high-end AI</p>
        </div>

        <div class="w-full max-w-xl bg-white/[0.02] backdrop-blur-2xl border border-white/10 rounded-[3rem] p-8 md:p-12 shadow-2xl relative">
            
            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label for="name" class="text-[10px] font-black text-gray-500 uppercase tracking-[0.2em] ml-2">Legal Name</label>
                        <input id="name" 
                               class="w-full bg-[#0A0A0A] border border-gray-800 rounded-2xl py-4 px-6 text-white placeholder-gray-700 focus:outline-none focus:border-lime-500/50 focus:ring-4 focus:ring-lime-500/5 transition-all duration-300"
                               type="text" name="name" placeholder="Arsalan Khan" :value="old('name')" required autofocus />
                        <x-input-error :messages="$errors->get('name')" class="mt-1 text-[10px] text-red-400 font-bold italic" />
                    </div>

                    <div class="space-y-2">
                        <label for="email" class="text-[10px] font-black text-gray-500 uppercase tracking-[0.2em] ml-2">Email Address</label>
                        <input id="email" 
                               class="w-full bg-[#0A0A0A] border border-gray-800 rounded-2xl py-4 px-6 text-white placeholder-gray-700 focus:outline-none focus:border-lime-500/50 focus:ring-4 focus:ring-lime-500/5 transition-all duration-300"
                               type="email" name="email" placeholder="name@email.com" :value="old('email')" required />
                        <x-input-error :messages="$errors->get('email')" class="mt-1 text-[10px] text-red-400 font-bold italic" />
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label for="password" class="text-[10px] font-black text-gray-500 uppercase tracking-[0.2em] ml-2">Create Password</label>
                        <input id="password" 
                               class="w-full bg-[#0A0A0A] border border-gray-800 rounded-2xl py-4 px-6 text-white placeholder-gray-700 focus:outline-none focus:border-lime-500/50 focus:ring-4 focus:ring-lime-500/5 transition-all duration-300"
                               type="password" name="password" placeholder="••••••••" required />
                        <x-input-error :messages="$errors->get('password')" class="mt-1 text-[10px] text-red-400 font-bold italic" />
                    </div>

                    <div class="space-y-2">
                        <label for="password_confirmation" class="text-[10px] font-black text-gray-500 uppercase tracking-[0.2em] ml-2">Verify Password</label>
                        <input id="password_confirmation" 
                               class="w-full bg-[#0A0A0A] border border-gray-800 rounded-2xl py-4 px-6 text-white placeholder-gray-700 focus:outline-none focus:border-lime-500/50 focus:ring-4 focus:ring-lime-500/5 transition-all duration-300"
                               type="password" name="password_confirmation" placeholder="••••••••" required />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-[10px] text-red-400 font-bold italic" />
                    </div>
                </div>

                <p class="text-[10px] text-gray-600 px-2 leading-relaxed italic">
                    By registering, you agree to our <span class="text-gray-400">Terms of Service</span> and acknowledge that AI-human synergy is the future of the global workforce.
                </p>

                <div class="pt-6">
                    <button type="submit" class="w-full bg-lime-accent hover:bg-white text-black font-black py-5 rounded-2xl transition-all shadow-[0_15px_30px_-10px_rgba(163,230,53,0.4)] active:scale-95 uppercase tracking-widest text-xs">
                        Create My Account
                    </button>
                </div>
            </form>

            <div class="mt-10 pt-6 border-t border-white/5 text-center">
                <p class="text-[10px] font-black text-gray-600 uppercase tracking-widest">
                    Already a member? 
                    <a href="{{ route('login') }}" class="text-white hover:text-lime-400 transition ml-2 underline underline-offset-4">Log In Instead</a>
                </p>
            </div>
        </div>

        <div class="mt-12 flex items-center gap-4 opacity-20">
            <div class="text-[8px] font-black text-gray-500 uppercase tracking-[0.5em]">Global AI Standards Compliance</div>
            <div class="w-2 h-2 bg-emerald-500 rounded-full shadow-[0_0_10px_#10b981]"></div>
        </div>
    </div>
</body>
</html>    

