// DOM Elements
        const badgeTitleInput = document.getElementById('badgeTitle');
        const badgeSubtitleInput = document.getElementById('badgeSubtitle');
        const iconOptions = document.querySelectorAll('.icon-option');
        const bgColorInput = document.getElementById('bgColor');
        const textColorInput = document.getElementById('textColor');
        const bgColorValue = document.getElementById('bgColorValue');
        const textColorValue = document.getElementById('textColorValue');
        const presetButtons = document.querySelectorAll('.preset-button');
        const previewBadge = document.getElementById('previewBadge');
        const previewIcon = previewBadge.querySelector('.badge-icon ion-icon');
        const previewTitle = previewBadge.querySelector('.badge-title');
        const previewSubtitle = previewBadge.querySelector('.badge-subtitle');
        const specTitle = document.getElementById('specTitle');
        const specSubtitle = document.getElementById('specSubtitle');
        const specIcon = document.getElementById('specIcon');
        const specBgColorIndicator = document.getElementById('specBgColorIndicator');
        const specBgColor = document.getElementById('specBgColor');
        const specTextColorIndicator = document.getElementById('specTextColorIndicator');
        const specTextColor = document.getElementById('specTextColor');

        // Current state
        let currentIcon = 'award';
        let currentBgColor = '#ec4899';
        let currentTextColor = '#ffffff';

        // Initialize with default values
        updatePreview();

        // Event Listeners
        badgeTitleInput.addEventListener('input', function() {
            previewTitle.textContent = this.value;
            specTitle.textContent = this.value;
        });

        badgeSubtitleInput.addEventListener('input', function() {
            previewSubtitle.textContent = this.value;
            specSubtitle.textContent = this.value;
        });

        iconOptions.forEach(option => {
            option.addEventListener('click', function() {
                // Remove selected class from all options
                iconOptions.forEach(opt => opt.classList.remove('selected'));
                // Add selected class to clicked option
                this.classList.add('selected');
                
                // Update current icon
                currentIcon = this.getAttribute('data-icon');
                
                // Update icon in preview
                updateIcon(currentIcon);
                
                // Update specification
                specIcon.textContent = this.querySelector('span').textContent;
            });
        });

        bgColorInput.addEventListener('input', function() {
            currentBgColor = this.value;
            bgColorValue.value = this.value;
            updatePreview();
        });

        textColorInput.addEventListener('input', function() {
            currentTextColor = this.value;
            textColorValue.value = this.value;
            updatePreview();
        });

        bgColorValue.addEventListener('input', function() {
            // Validate hex color format
            if (/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/.test(this.value)) {
                currentBgColor = this.value;
                bgColorInput.value = this.value;
                updatePreview();
            }
        });

        textColorValue.addEventListener('input', function() {
            // Validate hex color format
            if (/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/.test(this.value)) {
                currentTextColor = this.value;
                textColorInput.value = this.value;
                updatePreview();
            }
        });

        presetButtons.forEach(button => {
            button.addEventListener('click', function() {
                const color = this.getAttribute('data-color');
                const textColor = this.getAttribute('data-text');
                
                currentBgColor = color;
                currentTextColor = textColor;
                
                bgColorInput.value = color;
                bgColorValue.value = color;
                textColorInput.value = textColor;
                textColorValue.value = textColor;
                
                updatePreview();
            });
        });

        // Functions
        function updatePreview() {
            // Update badge styles
            previewBadge.style.backgroundColor = currentBgColor;
            previewTitle.style.color = currentTextColor;
            previewSubtitle.style.color = currentTextColor;
            
            // Update specifications
            specBgColorIndicator.style.backgroundColor = currentBgColor;
            specBgColor.textContent = currentBgColor;
            specTextColorIndicator.style.backgroundColor = currentTextColor;
            specTextColor.textContent = currentTextColor;
        }

        function updateIcon(iconName) {
            // Map icon names to ionicons
            const iconMap = {
                'award': 'ribbon',
                'shield': 'shield',
                'star': 'star',
                'zap': 'flash',
                'trophy': 'trophy'
            };
            
            const iconNameMapped = iconMap[iconName] || 'ribbon';
            previewIcon.setAttribute('name', iconNameMapped);
        }