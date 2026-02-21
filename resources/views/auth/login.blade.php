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
        <div class="absolute top-[-10%] right-[-10%] w-[45%] h-[45%] bg-lime-500/10 blur-[120px] rounded-full"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[40%] h-[40%] bg-emerald-500/5 blur-[120px] rounded-full"></div>
    </div>

    <div class="min-h-[85vh] flex flex-col items-center justify-center px-6">
        
        <div class="text-center mb-10">
            <div class="inline-block px-4 py-1.5 mb-4 border border-lime-500/30 rounded-full bg-lime-500/5">
                <span class="text-[10px] font-black text-lime-400 uppercase tracking-[0.3em]">Secure Terminal v2.0</span>
            </div>
            <h1 class="text-4xl md:text-5xl font-black text-white uppercase tracking-tighter">Welcome Back</h1>
            <p class="text-gray-500 text-sm font-medium mt-2 uppercase tracking-widest">Identify yourself to continue</p>
        </div>

        <div class="w-full max-w-md bg-white/[0.02] backdrop-blur-2xl border border-white/10 rounded-[3rem] p-8 md:p-12 shadow-2xl relative overflow-hidden">
            
            <x-auth-session-status class="mb-6 text-lime-400 text-sm font-bold text-center" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <div class="space-y-2">
                    <label for="email" class="text-[10px] font-black text-gray-500 uppercase tracking-[0.2em] ml-2">
                        User Identity
                    </label>
                    <div class="relative group">
                        <input id="email" 
                               class="w-full bg-[#0A0A0A] border border-gray-800 rounded-2xl py-4 px-6 text-white placeholder-gray-700 focus:outline-none focus:border-lime-500/50 focus:ring-4 focus:ring-lime-500/5 transition-all duration-300"
                               type="email" 
                               name="email" 
                               placeholder="name@domain.com"
                               :value="old('email')" 
                               required autofocus 
                               autocomplete="username" />
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-xs text-red-400 font-bold italic" />
                </div>

                <div class="space-y-2">
                    <div class="flex justify-between items-center px-2">
                        <label for="password" class="text-[10px] font-black text-gray-500 uppercase tracking-[0.2em]">
                            Access Key
                        </label>
                        @if (Route::has('password.request'))
                            <a class="text-[10px] font-black text-lime-400/60 hover:text-lime-400 uppercase tracking-widest transition" href="{{ route('password.request') }}">
                                Lost Key?
                            </a>
                        @endif
                    </div>
                    
                    <div class="relative group">
                        <input id="password" 
                               class="w-full bg-[#0A0A0A] border border-gray-800 rounded-2xl py-4 px-6 text-white placeholder-gray-700 focus:outline-none focus:border-lime-500/50 focus:ring-4 focus:ring-lime-500/5 transition-all duration-300"
                               type="password"
                               name="password"
                               placeholder="••••••••"
                               required 
                               autocomplete="current-password" />
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-xs text-red-400 font-bold italic" />
                </div>

                <div class="flex items-center justify-between px-2">
                    <label for="remember_me" class="inline-flex items-center cursor-pointer group">
                        <div class="relative">
                            <input id="remember_me" type="checkbox" name="remember" class="sr-only peer">
                            <div class="w-5 h-5 border-2 border-gray-700 rounded-md bg-[#0A0A0A] peer-checked:bg-lime-400 peer-checked:border-lime-400 transition-all duration-200"></div>
                            <svg class="absolute top-1 left-1 w-3 h-3 text-black opacity-0 peer-checked:opacity-100 transition-opacity pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="ms-3 text-[10px] font-black text-gray-500 uppercase tracking-widest group-hover:text-gray-300 transition">Stay Authenticated</span>
                    </label>
                </div>

                <div class="pt-4">
                    <button type="submit" class="w-full bg-lime-accent hover:bg-white text-black font-black py-5 rounded-2xl transition-all shadow-[0_15px_30px_-10px_rgba(163,230,53,0.4)] active:scale-95 uppercase tracking-widest text-xs">
                        Initiate Login
                    </button>
                </div>
            </form>

            <div class="mt-10 pt-6 border-t border-white/5 text-center">
                <p class="text-[10px] font-black text-gray-600 uppercase tracking-widest">
                    New Researcher? 
                    <a href="{{ route('register') }}" class="text-white hover:text-lime-400 transition ml-2 underline underline-offset-4">Create Account</a>
                </p>
            </div>
        </div>

        <div class="mt-12 flex items-center gap-6 opacity-30">
            <div class="h-[1px] w-12 bg-gray-500"></div>
            <div class="flex items-center gap-2">
                <div class="w-1.5 h-1.5 bg-lime-500 rounded-full animate-pulse"></div>
                <span class="text-[8px] font-black text-gray-500 uppercase tracking-[0.4em]">Encrypted Connection</span>
            </div>
            <div class="h-[1px] w-12 bg-gray-500"></div>
        </div>
    </div>
</body>
</html>