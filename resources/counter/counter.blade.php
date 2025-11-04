<div class="relative flex items-center justify-center min-h-[200px] p-8">
    <div class="relative group">
        <!-- Gradient background with glow effect -->
        <div class="absolute inset-0 bg-gradient-to-br from-yellow-500 via-amber-500 to-yellow-400 rounded-3xl blur-xl opacity-60 group-hover:opacity-80 transition-opacity duration-500 animate-pulse"></div>
        
        <!-- Main card container -->
        <div class="relative bg-gradient-to-br from-amber-950 via-yellow-950 to-amber-950 rounded-3xl shadow-2xl overflow-hidden border border-yellow-500/40 backdrop-blur-sm">
            <!-- Animated background pattern -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute inset-0 bg-[linear-gradient(45deg,transparent_25%,rgba(255,215,0,.2)_50%,transparent_75%,transparent_100%)] bg-[length:20px_20px] animate-[shimmer_3s_infinite]"></div>
            </div>
            
            <!-- Content -->
            <div class="relative px-12 py-16 text-center">
                <!-- Label -->
                <div class="text-yellow-400 text-sm font-medium uppercase tracking-wider mb-4 opacity-90">
                    Total Count
                </div>
                
                <!-- Count display -->
                <div class="text-7xl font-bold bg-gradient-to-r from-yellow-400 via-yellow-500 to-amber-400 bg-clip-text text-transparent drop-shadow-2xl mb-2 tabular-nums animate-[fadeIn_0.6s_ease-out]">
                    {{ number_format($count) }}
                </div>
                
                <!-- Decorative elements -->
                <div class="flex items-center justify-center gap-2 mt-4">
                    <div class="w-2 h-2 rounded-full bg-yellow-500 animate-pulse"></div>
                    <div class="w-1 h-1 rounded-full bg-yellow-400"></div>
                    <div class="w-2 h-2 rounded-full bg-amber-400 animate-pulse delay-75"></div>
                </div>
            </div>
            
            <!-- Corner accents -->
            <div class="absolute top-0 left-0 w-20 h-20 bg-gradient-to-br from-yellow-500/20 to-transparent rounded-br-full"></div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-amber-500/20 to-transparent rounded-tl-full"></div>
        </div>
    </div>
</div>
