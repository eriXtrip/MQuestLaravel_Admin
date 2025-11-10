/* ==============================================================
   badge-manager.js – REMEMBER EDITS, ALWAYS SAVE, INSTANT UPDATE
   ============================================================== */

document.addEventListener('DOMContentLoaded', () => {
    const gameSelect      = document.getElementById('gameSelect');
    const badgeSection    = document.getElementById('badgeSection');
    const badgeTitle      = document.getElementById('badgeTitle');
    const badgeSubtitle   = document.getElementById('badgeSubtitle');
    const bgColor         = document.getElementById('bgColor');
    const bgColorValue    = document.getElementById('bgColorValue');
    const iconOptions     = document.querySelectorAll('.icon-option');
    const presetButtons   = document.querySelectorAll('.preset-button');

    const previewBadge    = document.getElementById('previewBadge');
    const previewIcon     = document.getElementById('previewIcon');
    const previewTitle    = document.getElementById('previewTitle');
    const previewSubtitle = document.getElementById('previewSubtitle');

    const specTitle       = document.getElementById('specTitle');
    const specSubtitle    = document.getElementById('specSubtitle');
    const specIcon        = document.getElementById('specIcon');
    const specBgColorInd  = document.getElementById('specBgColorIndicator');
    const specBgColor     = document.getElementById('specBgColor');

    /* ------------------- DEFAULTS (fallback only) ------------------- */
    const defaultBadges = {
        matching:  { title: "Master Matcher",  subtitle: "Perfect Pairs Champion", icon: "flash",  label: "Zap",     bg: "#3b82f6" },
        flashcard: { title: "Memory Master",   subtitle: "Flashcard Prodigy",      icon: "trophy", label: "Trophy",  bg: "#10b981" },
        spelling:  { title: "Spelling Wizard", subtitle: "Word Perfectionist",     icon: "star",   label: "Star",    bg: "#f59e0b" },
        speak:     { title: "Voice Virtuoso",  subtitle: "Speech Perfection",      icon: "ribbon", label: "Award",   bg: "#ec4899" },
        imagequiz: { title: "Visual Genius",   subtitle: "Image Detective",        icon: "shield", label: "Shield",  bg: "#8b5cf6" }
    };

    /* ------------------- IN-MEMORY STORAGE FOR EDITS ------------------- */
    const customBadges = {}; // { matching: { title, subtitle, icon, bg }, ... }

    const templates = {
        matching:   document.getElementById('matching-game'),
        flashcard:  document.getElementById('flashcard-game'),
        spelling:   document.getElementById('spelling-game'),
        speak:      document.getElementById('speak-game'),
        imagequiz:  document.getElementById('imagequiz-game')
    };

    function showGameTemplate(type) {
        Object.values(templates).forEach(t => t.style.display = 'none');
        if (templates[type]) templates[type].style.display = 'block';
    }

    function getCurrentBadgeData() {
        const selected = document.querySelector('.icon-option.selected');
        return {
            title:    badgeTitle.value.trim(),
            subtitle: badgeSubtitle.value.trim(),
            icon:     selected?.dataset.icon || 'star',
            label:    selected?.dataset.label || 'Star',
            bg:       bgColor.value
        };
    }

    /* ------------------- LOAD BADGE (use custom if exists) ------------------- */
    function loadBadgeForGame(type) {
        const b = customBadges[type] || defaultBadges[type];
        if (!b) return;

        badgeTitle.value    = b.title;
        badgeSubtitle.value = b.subtitle;
        bgColor.value       = b.bg;
        bgColorValue.value  = b.bg;

        iconOptions.forEach(opt => opt.classList.toggle('selected', opt.dataset.icon === b.icon));
        presetButtons.forEach(btn => btn.classList.toggle('selected', btn.dataset.color === b.bg));

        requestAnimationFrame(updateAll);
    }

    /* ------------------- UPDATE PREVIEW + SAVE TO MEMORY ------------------- */
    function updateAll() {
        const d = getCurrentBadgeData();

        // Update preview
        previewIcon.setAttribute('name', d.icon + '-outline');
        previewTitle.textContent    = d.title;
        previewSubtitle.textContent = d.subtitle;
        previewBadge.style.backgroundColor = d.bg;
        previewBadge.style.color = '#ffffff';

        // Update specs
        specTitle.textContent   = d.title;
        specSubtitle.textContent= d.subtitle;
        specIcon.textContent    = d.label;
        specBgColorInd.style.backgroundColor = d.bg;
        specBgColor.textContent = d.bg;

        // SAVE CURRENT STATE TO MEMORY
        const currentGame = gameSelect.value;
        if (currentGame) {
            customBadges[currentGame] = { ...d };
        }
    }

    /* ------------------- GAME SELECT – INSTANT ------------------- */
    gameSelect.addEventListener('change', function () {
        const type = this.value;
        showGameTemplate(type);

        if (type && defaultBadges[type]) {
            badgeSection.style.display = 'block';
            loadBadgeForGame(type);
        } else {
            badgeSection.style.display = 'none';
        }
    });

    /* ------------------- INPUT HANDLERS (all call updateAll) ------------------- */
    iconOptions.forEach(opt => opt.addEventListener('click', () => {
        iconOptions.forEach(o => o.classList.remove('selected'));
        opt.classList.add('selected');
        updateAll();
    }));

    bgColor.addEventListener('input', () => {
        bgColorValue.value = bgColor.value;
        updateAll();
    });

    bgColorValue.addEventListener('input', () => {
        if (/^#[0-9A-Fa-f]{6}$/i.test(bgColorValue.value)) {
            bgColor.value = bgColorValue.value;
            updateAll();
        }
    });

    presetButtons.forEach(btn => btn.addEventListener('click', () => {
        presetButtons.forEach(b => b.classList.remove('selected'));
        btn.classList.add('selected');
        bgColor.value = bgColorValue.value = btn.dataset.color;
        updateAll();
    }));

    badgeTitle.addEventListener('input', updateAll);
    badgeSubtitle.addEventListener('input', updateAll);

    /* ------------------- SAVE ALL BADGES TO GLOBAL ------------------- */
    window.getAllBadgeData = function () {
        const saved = {};
        Object.keys(defaultBadges).forEach(type => {
            saved[type] = customBadges[type] || defaultBadges[type];
        });
        return saved;
    };

    /* ------------------- INITIAL LOAD ------------------- */
    if (gameSelect.value) {
        showGameTemplate(gameSelect.value);
        loadBadgeForGame(gameSelect.value);
        badgeSection.style.display = 'block';
    }
    updateAll();
});