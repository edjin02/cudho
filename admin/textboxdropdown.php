<!DOCTYPE html>
<html>
<head>
    <style>
        #inputBox {
            width: 300px;
            height: 30px;
            padding: 5px;
            font-size: 16px;
        }
        #suggestionBox {
            width: 300px;
            max-height: 150px;
            overflow-y: auto;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 5px;
            font-size: 14px;
        }
        .suggestion {
            padding: 5px;
            cursor: pointer;
        }
        .suggestion:hover,
        .selected {
            background-color: #e9e9e9;
        }
    </style>
</head>
<body>
<input type="text" id="inputBox" onclick="showAllSuggestions()" oninput="showSuggestions(this.value)" onkeydown="handleKeyDown(event)" onblur="changePlaceholder()" placeholder="Barangay..." />
<div id="suggestionBox" style='display:none'></div>

<script>
    // Sample suggestions
    const suggestions = ['Apple', 'Banana', 'Cherry', 'Grape', 'Lemon', 'Orange', 'Pineapple'];
    let selectedIndex = -1;
    let suggestionBoxVisible = false;

    function showAllSuggestions() {
        showSuggestions('');
    }

    function showSuggestions(input) {
        const suggestionBox = document.getElementById('suggestionBox');
        suggestionBox.innerHTML = '';

        if (input.length === 0) {
            suggestionBox.style.display = 'block'; // Show suggestion box
            suggestionBoxVisible = true;
            suggestions.forEach((suggestion, index) => {
                const suggestionElement = createSuggestionElement(suggestion, index);
                suggestionBox.appendChild(suggestionElement);
            });

            // Set the first suggestion as placeholder
            if (suggestions.length > 0) {
                document.getElementById('inputBox').placeholder = suggestions[0];
            }
        } else {
            const filteredSuggestions = suggestions.filter(suggestion =>
                suggestion.toLowerCase().startsWith(input.toLowerCase())
            );

            if (filteredSuggestions.length === 0) {
                suggestionBox.style.display = 'none';
                suggestionBoxVisible = false;
            } else {
                suggestionBox.style.display = 'block';
                suggestionBoxVisible = true;
                filteredSuggestions.forEach((suggestion, index) => {
                    const suggestionElement = createSuggestionElement(suggestion, index);
                    suggestionBox.appendChild(suggestionElement);
                });

                // Set the first filtered suggestion as placeholder
                if (filteredSuggestions.length > 0) {
                    document.getElementById('inputBox').placeholder = filteredSuggestions[0];
                }
            }
        }

        // Always hover over the first suggestion
        selectedIndex = 0;
        toggleSelectedSuggestion();
    }

    function createSuggestionElement(suggestion, index) {
        const suggestionElement = document.createElement('div');
        suggestionElement.className = 'suggestion';
        suggestionElement.textContent = suggestion;
        suggestionElement.onclick = () => {
            document.getElementById('inputBox').value = suggestion;
            suggestionBox.style.display = 'none';
            suggestionBoxVisible = false;
        };
        suggestionElement.onmouseover = () => {
            selectedIndex = index;
            toggleSelectedSuggestion();
        };
        return suggestionElement;
    }

    function toggleSelectedSuggestion() {
        const suggestionBox = document.getElementById('suggestionBox');
        const suggestionElements = suggestionBox.getElementsByClassName('suggestion');
        Array.from(suggestionElements).forEach((suggestionElement, index) => {
            suggestionElement.classList.toggle('selected', index === selectedIndex);
        });

        // Update the placeholder with the selected suggestion
        const selectedSuggestion = suggestionElements[selectedIndex];
        if (selectedSuggestion) {
            document.getElementById('inputBox').placeholder = selectedSuggestion.textContent;
        }
    }

    function handleKeyDown(event) {
        const suggestionBox = document.getElementById('suggestionBox');
        const suggestionElements = suggestionBox.getElementsByClassName('suggestion');

        if (event.key === 'ArrowDown') {
            event.preventDefault();
            selectedIndex = Math.min(selectedIndex + 1, suggestionElements.length - 1);
        } else if (event.key === 'ArrowUp') {
            event.preventDefault();
            selectedIndex = Math.max(selectedIndex - 1, -1);
        } else if (event.key === 'Tab' && selectedIndex >= 0) {
            event.preventDefault();
            const selectedSuggestion = suggestionElements[selectedIndex];
            document.getElementById('inputBox').value = selectedSuggestion.textContent;
            suggestionBox.style.display = 'none';
            suggestionBoxVisible = false;
            selectedIndex = -1;
            return;
        } else if (event.key === 'Enter' && selectedIndex >= 0) {
            event.preventDefault();
            const selectedSuggestion = suggestionElements[selectedIndex];
            document.getElementById('inputBox').value = selectedSuggestion.textContent;
            suggestionBox.style.display = 'none';
            suggestionBoxVisible = false;
            selectedIndex = -1;
            return;
        }

        toggleSelectedSuggestion();
    }

    function changePlaceholder() {
        document.getElementById('inputBox').placeholder = 'Barangay...';
    }

    document.getElementById('inputBox').addEventListener('blur', function() {
        if (suggestionBoxVisible) {
            const suggestionBox = document.getElementById('suggestionBox');
            suggestionBox.style.display = 'none';
            suggestionBoxVisible = false;
        }
    });
</script>






</body>
</html>
