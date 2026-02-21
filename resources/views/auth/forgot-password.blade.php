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
        <div class="absolute top-[20%] left-1/2 -translate-x-1/2 w-[50%] h-[50%] bg-lime-500/10 blur-[140px] rounded-full"></div>
    </div>

    <div class="min-h-[80vh] flex flex-col items-center justify-center px-6">
        
        <div class="text-center mb-10">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-[#111111] border border-gray-800 rounded-[2rem] shadow-2xl mb-6 relative group">
                <div class="absolute -inset-2 bg-lime-500/20 blur-lg rounded-full opacity-0 group-hover:opacity-100 transition duration-700"></div>
                <svg class="w-10 h-10 text-lime-400 relative" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/>
                </svg>
            </div>
            <h1 class="text-3xl md:text-4xl font-black text-white uppercase tracking-tighter">Restore Access</h1>
            <p class="text-gray-500 text-sm font-medium mt-3 max-w-sm mx-auto leading-relaxed uppercase tracking-widest">
                {{ __('Enter your registered identity to receive a restoration link.') }}
            </p>
        </div>

        <div class="w-full max-w-md bg-white/[0.02] backdrop-blur-2xl border border-white/10 rounded-[3rem] p-10 shadow-2xl relative">
            
            <x-auth-session-status class="mb-6 text-lime-400 text-sm font-bold text-center italic" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}" class="space-y-8">
                @csrf

                <div class="space-y-2">
                    <label for="email" class="text-[10px] font-black text-gray-500 uppercase tracking-[0.2em] ml-2">
                        Registered Email
                    </label>
                    <div class="relative">
                        <input id="email" 
                               class="w-full bg-[#0A0A0A] border border-gray-800 rounded-2xl py-5 px-6 text-white placeholder-gray-700 focus:outline-none focus:border-lime-500/50 focus:ring-4 focus:ring-lime-500/5 transition-all duration-300"
                               type="email" 
                               name="email" 
                               placeholder="identity@network.com"
                               :value="old('email')" 
                               required autofocus />
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-xs text-red-400 font-bold italic" />
                </div>

                <div>
                    <button type="submit" class="w-full bg-lime-accent hover:bg-white text-black font-black py-5 rounded-2xl transition-all shadow-[0_15px_30px_-10px_rgba(163,230,53,0.4)] active:scale-95 uppercase tracking-widest text-xs">
                        Send Restoration Link
                    </button>
                </div>
            </form>

            <div class="mt-10 pt-6 border-t border-white/5 text-center">
                <a href="{{ route('login') }}" class="text-[10px] font-black text-gray-500 hover:text-white uppercase tracking-[0.2em] transition">
                    ← Back to Secure Login
                </a>
            </div>
        </div>

        <div class="mt-12 flex items-center gap-4">
            <div class="w-1.5 h-1.5 bg-gray-800 rounded-full"></div>
            <div class="w-1.5 h-1.5 bg-gray-800 rounded-full"></div>
            <div class="w-1.5 h-1.5 bg-lime-500 rounded-full animate-pulse"></div>
            <div class="w-1.5 h-1.5 bg-gray-800 rounded-full"></div>
            <div class="w-1.5 h-1.5 bg-gray-800 rounded-full"></div>
        </div>
    </div>
</body>
</html>