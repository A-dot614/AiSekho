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

    <div class="min-h-[85vh] flex flex-col items-center justify-center px-6 py-12">
        
        <div class="text-center mb-10">
            <div class="inline-block px-4 py-1.5 mb-4 border border-lime-500/30 rounded-full bg-lime-500/5">
                <span class="text-[10px] font-black text-lime-400 uppercase tracking-[0.3em]">Access Restoration Protocol</span>
            </div>
            <h1 class="text-4xl md:text-5xl font-black text-white uppercase tracking-tighter">Set New Key</h1>
            <p class="text-gray-500 text-sm font-medium mt-2 uppercase tracking-widest">Override your previous credentials</p>
        </div>

        <div class="w-full max-w-xl bg-white/[0.02] backdrop-blur-2xl border border-white/10 rounded-[3rem] p-8 md:p-12 shadow-2xl relative">
            
            <form method="POST" action="{{ route('password.store') }}" class="space-y-8">
                @csrf

                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <div class="space-y-2">
                    <label for="email" class="text-[10px] font-black text-gray-500 uppercase tracking-[0.2em] ml-2">
                        Confirm Identity (Email)
                    </label>
                    <div class="relative">
                        <input id="email" 
                               class="w-full bg-[#0A0A0A] border border-gray-800 rounded-2xl py-4 px-6 text-white placeholder-gray-700 focus:outline-none focus:border-lime-500/50 focus:ring-4 focus:ring-lime-500/5 transition-all duration-300"
                               type="email" 
                               name="email" 
                               placeholder="identity@network.com"
                               :value="old('email', $request->email)" 
                               required autofocus 
                               autocomplete="username" />
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-xs text-red-400 font-bold italic" />
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label for="password" class="text-[10px] font-black text-gray-500 uppercase tracking-[0.2em] ml-2">
                            New Access Key
                        </label>
                        <input id="password" 
                               class="w-full bg-[#0A0A0A] border border-gray-800 rounded-2xl py-4 px-6 text-white placeholder-gray-700 focus:outline-none focus:border-lime-500/50 focus:ring-4 focus:ring-lime-500/5 transition-all duration-300"
                               type="password" 
                               name="password" 
                               placeholder="••••••••"
                               required 
                               autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-1 text-[10px] text-red-400 font-bold italic" />
                    </div>

                    <div class="space-y-2">
                        <label for="password_confirmation" class="text-[10px] font-black text-gray-500 uppercase tracking-[0.2em] ml-2">
                            Confirm Key
                        </label>
                        <input id="password_confirmation" 
                               class="w-full bg-[#0A0A0A] border border-gray-800 rounded-2xl py-4 px-6 text-white placeholder-gray-700 focus:outline-none focus:border-lime-500/50 focus:ring-4 focus:ring-lime-500/5 transition-all duration-300"
                               type="password"
                               name="password_confirmation" 
                               placeholder="••••••••"
                               required 
                               autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-[10px] text-red-400 font-bold italic" />
                    </div>
                </div>

                <div class="pt-4">
                    <button type="submit" class="w-full bg-lime-accent hover:bg-white text-black font-black py-5 rounded-2xl transition-all shadow-[0_15px_30px_-10px_rgba(163,230,53,0.4)] active:scale-95 uppercase tracking-widest text-xs">
                        Finalize Restoration
                    </button>
                </div>
            </form>
        </div>

        <div class="mt-12 opacity-30 flex items-center gap-6">
            <div class="h-[1px] w-12 bg-gray-500"></div>
            <div class="text-[8px] font-black text-gray-500 uppercase tracking-[0.5em]">Auth Layer Secured</div>
            <div class="h-[1px] w-12 bg-gray-500"></div>
        </div>
    </div>
</body>
</html>