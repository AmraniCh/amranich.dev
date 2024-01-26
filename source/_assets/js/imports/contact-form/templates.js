export default {
    errorAlert: message => `<div class="animate-[fadeIn_.3s_linear] flex items-center gap-2 p-3 text-sm text-red-50 rounded-md bg-rose-400" role="alert">
            <svg class="flex-none inline-block fill-red-50 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512">
                <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c13.3 0 24 10.7 24 24V264c0 13.3-10.7 24-24 24s-24-10.7-24-24V152c0-13.3 10.7-24 24-24zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
            </svg>
            ${message}
        </div>`,

    successAlert: message => `<div class="animate-[fadeIn_.3s_linear] flex items-center gap-2 p-3 text-sm text-emerald-50 rounded-md bg-emerald-500" role="alert">
                <svg class="flex-none inline-block fill-red-50 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                </svg>
            ${message}
        </div>`
}
