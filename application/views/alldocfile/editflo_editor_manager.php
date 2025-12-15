<div class="flex flex-col md:flex-row px-4">

    <!-- Main Content -->
    <article class="max-w-full">
        <div class="mb-8">
            <h1 class="page text-3xl font-bold text-gray-800 mb-2">editflo.EditorManager</h1>
            <p class="text-gray-700 text-sm sm:text-base">This is the base class for the editflo global. This class is a factory for editflo.Editor instances. And the editflo global is the only EditorManager instance the class is expected to create.</p>
        </div>
        <div class="sect3 mb-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-2">Examples</h2>

            <div class="listingblock mb-4">
                <div class="content">
                    <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
                        <div class="absolute top-2 right-2 flex items-center gap-3 
                        opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                            <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>
                            <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                <i class="fas fa-copy text-xs"></i> Copy
                                <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                    Copied!
                                </div>
                            </button>
                        </div>
                        <div class="overflow-x-auto text-white-500">
                            <code class="javascript">
                                <pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">editflo</span>.<span class="text-green-400">EditorManager</span>.<span class="text-blue-400">init</span>(<span class="text-yellow-400">{}</span>);</code>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</article>
</div>

                                
<script>
    // Simple script to handle copy code buttons
    document.addEventListener('DOMContentLoaded', function() {
        const copyButtons = document.querySelectorAll('.copy-button');

        copyButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Find the code element
                const codeBlock = this.closest('.group').querySelector('pre');
                const code = codeBlock.textContent;

                // Copy to clipboard
                navigator.clipboard.writeText(code).then(() => {
                    // Original content save करें
                    const originalHTML = this.innerHTML;
                    const originalBg = this.style.background;

                    // Change button text and color
                    this.innerHTML = '<i class="fas fa-check text-xs"></i> Copied!';
                    this.style.background = '#10B981'; // Green color

                    // Reset after 2 seconds
                    setTimeout(() => {
                        this.innerHTML = originalHTML;
                        this.style.background = originalBg;
                    }, 2000);

                }).catch(err => {
                    console.error('Copy failed:', err);

                    // Fallback method for older browsers
                    const textarea = document.createElement('textarea');
                    textarea.value = code;
                    document.body.appendChild(textarea);
                    textarea.select();
                    document.execCommand('copy');
                    document.body.removeChild(textarea);

                    // Same feedback for fallback
                    const originalHTML = this.innerHTML;
                    const originalBg = this.style.background;

                    this.innerHTML = '<i class="fas fa-check text-xs"></i> Copied!';
                    this.style.background = '#10B981';

                    setTimeout(() => {
                        this.innerHTML = originalHTML;
                        this.style.background = originalBg;
                    }, 2000);
                });
            });
        });
    });
</script>

<script>
    // Mobile menu toggle
    document.getElementById('menu-toggle')?.addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
        this.innerHTML = menu.classList.contains('hidden') ?
            '<i class="fas fa-bars text-xl"></i>' :
            '<i class="fas fa-times text-xl"></i>';
    });

    // Copy button functionality
    document.querySelectorAll('.copy-button').forEach(button => {
        button.addEventListener('click', function() {
            const codeBlock = this.closest('.group').querySelector('code');
            const code = codeBlock.textContent;

            navigator.clipboard.writeText(code).then(() => {
                const originalHTML = this.innerHTML;
                const originalText = this.querySelector('span')?.textContent || 'Copy';

                this.innerHTML = '<i class="fas fa-check text-xs"></i> <span class="hidden sm:inline">Copied!</span>';

                setTimeout(() => {
                    this.innerHTML = originalHTML;
                    if (originalText !== 'Copy') {
                        this.querySelector('span').textContent = originalText;
                    }
                }, 2000);
            }).catch(err => {
                console.error('Copy failed:', err);
                // Fallback method
                const textarea = document.createElement('textarea');
                textarea.value = code;
                document.body.appendChild(textarea);
                textarea.select();
                document.execCommand('copy');
                document.body.removeChild(textarea);

                const originalHTML = this.innerHTML;
                this.innerHTML = '<i class="fas fa-check text-xs"></i> <span class="hidden sm:inline">Copied!</span>';

                setTimeout(() => {
                    this.innerHTML = originalHTML;
                }, 2000);
            });
        });
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                // Close mobile menu if open
                const mobileMenu = document.getElementById('mobile-menu');
                const menuToggle = document.getElementById('menu-toggle');
                if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                    menuToggle.innerHTML = '<i class="fas fa-bars text-xl"></i>';
                }

                // Calculate offset based on screen size
                const offset = window.innerWidth < 1024 ? 80 : 20;

                window.scrollTo({
                    top: targetElement.offsetTop - offset,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
            if (!menuToggle.contains(event.target) && !mobileMenu.contains(event.target)) {
                mobileMenu.classList.add('hidden');
                menuToggle.innerHTML = '<i class="fas fa-bars text-xl"></i>';
            }
        }
    });
</script>