<div id="submit-modal" class="fixed z-50 inset-0 bg-black/40 backdrop-blur-sm flex items-center justify-center hidden">
    <div
        id="submit-modal-content"
        class="w-full max-w-sm mx-4 bg-[#FFFFE7] text-[#2A4C3A] rounded-3xl p-8 shadow-2xl scale-95 opacity-0 transition-all duration-300 ease-out"
    >
        <!-- Loading state -->
        <div id="modal-loading-state" class="flex flex-col items-center gap-5 py-6">
            <div class="relative w-16 h-16 flex items-center justify-center">
                <div class="absolute inset-0 rounded-full border-4 border-[#2A4C3A]/15"></div>
                <div
                    class="absolute inset-0 rounded-full border-4 border-[#2A4C3A] border-t-transparent animate-spin [animation-duration:0.8s]"
                ></div>
            </div>
            <div class="text-center">
                <h6 class="text-2xl font-semibold tracking-tight">Sending your message...</h6>
                <p class="text-sm text-[#2A4C3A]/70 mt-1">Hang tight, this'll just take a moment.</p>
            </div>
        </div>

        <!-- Success state -->
        <div id="modal-success-state" class="hidden flex-col items-center gap-5 py-6">
            <svg class="w-16 h-16" viewBox="0 0 52 52">
                <circle id="tick-circle" cx="26" cy="26" r="24" fill="none" stroke="#2A4C3A" stroke-width="3" />
                <path id="tick-check" fill="none" stroke="#2A4C3A" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" d="M14 27l7 7 16-16" />
            </svg>
            <div class="text-center">
                <h6 class="text-2xl font-semibold tracking-tight">Message Sent!</h6>
                <p class="text-sm text-[#2A4C3A]/70 mt-1">We'll get back to you shortly.</p>
            </div>
        </div>
    </div>
</div>

<style>
    #tick-circle,
    #tick-check {
        stroke-dasharray: 160;
        stroke-dashoffset: 160;
    }
    #modal-success-state.animate-in #tick-circle {
        animation: draw 0.45s ease-out forwards;
    }
    #modal-success-state.animate-in #tick-check {
        animation: draw 0.3s ease-out 0.45s forwards;
    }
    @keyframes draw {
        to {
            stroke-dashoffset: 0;
        }
    }
</style>
