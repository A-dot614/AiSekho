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
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[50%] h-[50%] bg-emerald-500/10 blur-[140px] rounded-full"></div>
    </div>

    <div class="min-h-[80vh] flex flex-col items-center justify-center px-6">
        
        <div class="text-center mb-10">
            <div class="relative inline-block group">
                <div class="absolute -inset-1 bg-lime-400 rounded-full blur opacity-25 group-hover:opacity-50 animate-pulse transition duration-1000"></div>
                
                <div class="relative w-20 h-20 bg-[#0F0F0F] border border-gray-800 rounded-full flex items-center justify-center shadow-2xl">
                    <svg class="w-10 h-10 text-lime-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
            </div>
            
            <h1 class="text-3xl md:text-4xl font-black text-white uppercase tracking-tighter mt-8">Verify Identity</h1>
            <p class="text-gray-500 text-sm font-medium mt-4 max-w-sm mx-auto leading-relaxed uppercase tracking-widest">
                {{ __('Final step: We have dispatched a secure link to your inbox. Please authorize your account to proceed.') }}
            </p>
        </div>

        <div class="w-full max-w-lg bg-white/[0.02] backdrop-blur-2xl border border-white/10 rounded-[3rem] p-10 shadow-2xl relative overflow-hidden">
            
            @if (session('status') == 'verification-link-sent')
                <div class="mb-8 p-4 bg-lime-500/10 border border-lime-500/20 rounded-2xl text-center">
                    <p class="text-xs font-black text-lime-400 uppercase tracking-widest">
                        {{ __('A fresh link has been transmitted to your address.') }}
                    </p>
                </div>
            @endif

            <div class="flex flex-col md:flex-row items-center gap-6">
                <form method="POST" action="{{ route('verification.send') }}" class="w-full md:flex-1">
                    @csrf
                    <button type="submit" class="w-full bg-lime-accent hover:bg-white text-black font-black py-5 rounded-2xl transition-all shadow-[0_15px_30px_-10px_rgba(163,230,53,0.4)] active:scale-95 uppercase tracking-widest text-xs">
                        {{ __('Resend Link') }}
                    </button>
                </form>

                <form method="POST" action="{{ route('logout') }}" class="w-full md:w-auto">
                    @csrf
                    <button type="submit" class="w-full px-8 py-5 text-[10px] font-black text-gray-500 hover:text-white uppercase tracking-widest border border-gray-800 rounded-2xl transition duration-300">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>

        <div class="mt-12 flex items-center gap-4 opacity-30">
            <div class="h-[1px] w-8 bg-gray-500"></div>
            <span class="text-[8px] font-black text-gray-500 uppercase tracking-[0.5em]">Identity Protection Protocol Active</span>
            <div class="h-[1px] w-8 bg-gray-500"></div>
        </div>
    </div>

</body>
</html>
