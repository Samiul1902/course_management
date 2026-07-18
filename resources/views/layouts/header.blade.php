<style>
    :root {
        --primary: #667eea;
        --secondary: #764ba2;
        --heading: #252a44;
        --text: #545d72;
        --border: #e8eaf2;
        --white: #ffffff;
    }

    /* Remove browser and previous layout spacing */
    html,
    body {
        width: 100%;
        margin: 0 !important;
        padding: 0 !important;
    }

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        overflow-x: hidden;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Full-width header */
    .site-header {
        position: sticky;
        top: 0;
        z-index: 1000;
        width: 100%;
        margin: 0;
        padding: 0;
        background: rgba(255, 255, 255, 0.97);
        border-bottom: 1px solid var(--border);
        box-shadow: 0 8px 30px rgba(30, 40, 80, 0.08);
        backdrop-filter: blur(14px);
    }

    /* Header content container */
    .navbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        max-width: 1400px;
        min-height: 84px;
        margin: 0 auto;
        padding: 12px 30px;
    }

    /* Brand */
    .navbar-brand {
        display: inline-flex;
        align-items: center;
        gap: 14px;
        color: var(--heading);
        font-size: 27px;
        font-weight: 750;
        line-height: 1;
        text-decoration: none;
        letter-spacing: -0.5px;
    }

    .brand-icon {
        display: grid;
        flex-shrink: 0;
        place-items: center;
        width: 52px;
        height: 52px;
        border-radius: 16px;
        color: var(--white);
        background: linear-gradient(
            135deg,
            var(--primary),
            var(--secondary)
        );
        box-shadow: 0 10px 25px rgba(102, 126, 234, 0.28);
    }

    .brand-icon svg {
        width: 27px;
        height: 27px;
    }

    /* Desktop menu */
    .nav-menu {
        display: flex;
        align-items: center;
        gap: 10px;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .nav-menu li {
        margin: 0;
        padding: 0;
    }

    .nav-link {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-height: 48px;
        padding: 11px 19px;
        border-radius: 12px;
        color: var(--text);
        font-size: 16px;
        font-weight: 600;
        text-decoration: none;
        transition:
            color 0.25s ease,
            background-color 0.25s ease,
            box-shadow 0.25s ease,
            transform 0.25s ease;
    }

    .nav-link:hover {
        color: var(--primary);
        background: rgba(102, 126, 234, 0.09);
        transform: translateY(-1px);
    }

    .nav-link.active:not(.register-btn) {
        color: var(--primary);
        background: rgba(102, 126, 234, 0.12);
    }

    .register-btn {
        min-width: 165px;
        padding-inline: 23px;
        color: var(--white);
        background: linear-gradient(
            135deg,
            var(--primary),
            var(--secondary)
        );
        box-shadow: 0 10px 24px rgba(102, 126, 234, 0.25);
    }

    .register-btn:hover,
    .register-btn.active {
        color: var(--white);
        background: linear-gradient(
            135deg,
            #596fe1,
            #69429d
        );
        box-shadow: 0 14px 28px rgba(102, 126, 234, 0.34);
    }

    /* Mobile menu button */
    .menu-toggle {
        display: none;
        align-items: center;
        justify-content: center;
        width: 44px;
        height: 44px;
        padding: 0;
        border: 1px solid #e0e4ee;
        border-radius: 11px;
        color: var(--heading);
        background: var(--white);
        cursor: pointer;
        transition:
            color 0.2s ease,
            border-color 0.2s ease,
            background-color 0.2s ease;
    }

    .menu-toggle:hover {
        color: var(--primary);
        border-color: rgba(102, 126, 234, 0.4);
        background: rgba(102, 126, 234, 0.06);
    }

    .menu-toggle svg {
        width: 23px;
        height: 23px;
    }

    /* Responsive tablet/mobile */
    @media (max-width: 768px) {
        .navbar {
            position: relative;
            min-height: 72px;
            padding: 10px 18px;
        }

        .navbar-brand {
            gap: 10px;
            font-size: 20px;
        }

        .brand-icon {
            width: 44px;
            height: 44px;
            border-radius: 13px;
        }

        .brand-icon svg {
            width: 23px;
            height: 23px;
        }

        .menu-toggle {
            display: flex;
        }

        .nav-menu {
            position: absolute;
            top: calc(100% + 10px);
            right: 16px;
            left: 16px;
            display: none;
            flex-direction: column;
            align-items: stretch;
            gap: 5px;
            padding: 12px;
            border: 1px solid var(--border);
            border-radius: 16px;
            background: var(--white);
            box-shadow: 0 20px 45px rgba(30, 40, 80, 0.16);
        }

        .nav-menu.open {
            display: flex;
            animation: openMenu 0.22s ease;
        }

        @keyframes openMenu {
            from {
                opacity: 0;
                transform: translateY(-8px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .nav-link {
            width: 100%;
            min-height: 45px;
        }

        .register-btn {
            min-width: 0;
            margin-top: 4px;
        }
    }

    @media (max-width: 380px) {
        .navbar {
            padding-inline: 14px;
        }

        .navbar-brand {
            font-size: 18px;
        }

        .brand-icon {
            width: 41px;
            height: 41px;
        }
    }
</style>

<header class="site-header">
    <nav class="navbar" aria-label="Main navigation">

        <a href="{{ url('/') }}" class="navbar-brand">
            <span class="brand-icon">
                <svg
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    aria-hidden="true"
                >
                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                </svg>
            </span>

            <span>Coaching Center</span>
        </a>

        <button
            type="button"
            class="menu-toggle"
            id="menuToggle"
            aria-label="Open navigation menu"
            aria-controls="navMenu"
            aria-expanded="false"
        >
            <svg
                id="menuIcon"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                aria-hidden="true"
            >
                <line x1="4" y1="7" x2="20" y2="7"></line>
                <line x1="4" y1="12" x2="20" y2="12"></line>
                <line x1="4" y1="17" x2="20" y2="17"></line>
            </svg>
        </button>

        <ul class="nav-menu" id="navMenu">
            <li>
                <a
                    href="{{ url('/') }}"
                    class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                >
                    Home
                </a>
            </li>

            <li>
                <a
                    href="{{ url('/login') }}"
                    class="nav-link {{ request()->is('login') ? 'active' : '' }}"
                >
                    Login
                </a>
            </li>

            <li>
                <a
                    href="{{ url('/register') }}"
                    class="nav-link register-btn {{ request()->is('register') ? 'active' : '' }}"
                >
                    Create Account
                </a>
            </li>
        </ul>
    </nav>
</header>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const menuToggle = document.getElementById("menuToggle");
        const navMenu = document.getElementById("navMenu");
        const menuIcon = document.getElementById("menuIcon");

        if (!menuToggle || !navMenu || !menuIcon) {
            return;
        }

        function openMenu() {
            navMenu.classList.add("open");
            menuToggle.setAttribute("aria-expanded", "true");
            menuToggle.setAttribute("aria-label", "Close navigation menu");

            menuIcon.innerHTML = `
                <line x1="6" y1="6" x2="18" y2="18"></line>
                <line x1="18" y1="6" x2="6" y2="18"></line>
            `;
        }

        function closeMenu() {
            navMenu.classList.remove("open");
            menuToggle.setAttribute("aria-expanded", "false");
            menuToggle.setAttribute("aria-label", "Open navigation menu");

            menuIcon.innerHTML = `
                <line x1="4" y1="7" x2="20" y2="7"></line>
                <line x1="4" y1="12" x2="20" y2="12"></line>
                <line x1="4" y1="17" x2="20" y2="17"></line>
            `;
        }

        menuToggle.addEventListener("click", function () {
            const isOpen = navMenu.classList.contains("open");

            if (isOpen) {
                closeMenu();
            } else {
                openMenu();
            }
        });

        navMenu.querySelectorAll("a").forEach(function (link) {
            link.addEventListener("click", closeMenu);
        });

        document.addEventListener("click", function (event) {
            if (
                navMenu.classList.contains("open") &&
                !event.target.closest(".navbar")
            ) {
                closeMenu();
            }
        });

        document.addEventListener("keydown", function (event) {
            if (
                event.key === "Escape" &&
                navMenu.classList.contains("open")
            ) {
                closeMenu();
                menuToggle.focus();
            }
        });

        window.addEventListener("resize", function () {
            if (window.innerWidth > 768) {
                closeMenu();
            }
        });
    });
</script>
