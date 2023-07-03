// Sample suggestions
    // const suggestions = ['APLAYA', 'BALIBAGO', 'CAINGIN', 'DILA', 'DITA', 'DON JOSE', 'IBABA', 'KANLURAN', 'LABAS', 'MACABLING', 'MALITLIT', 'MALUSAK', 'MARKET AREA', 'POOC', 'PULONG SANTA CRUZ', 'SANTO DOMINGO', 'SINALHAN', 'TAGAPO'];
    // let selectedIndex = -1;
    // let suggestionBoxVisible = false;

    // function showAllSuggestions() {
    //     showSuggestions('');
    // }

    // function showSuggestions(input) {
    //     const suggestionBox = document.getElementById('suggestionBox');
    //     suggestionBox.innerHTML = '';

    //     if (input.length === 0) {
    //         suggestionBox.style.display = 'block'; // Show suggestion box
    //         suggestionBoxVisible = true;
    //         suggestions.forEach((suggestion, index) => {
    //             const suggestionElement = createSuggestionElement(suggestion, index);
    //             suggestionBox.appendChild(suggestionElement);
    //         });

    //         // Set the first suggestion as placeholder
    //         if (suggestions.length > 0) {
    //             document.getElementById('barangay-select').placeholder = suggestions[0];
    //         }
    //     } else {
    //         const filteredSuggestions = suggestions.filter(suggestion =>
    //             suggestion.toLowerCase().startsWith(input.toLowerCase())
    //         );

    //         if (filteredSuggestions.length === 0) {
    //             suggestionBox.style.display = 'none';
    //             suggestionBoxVisible = false;
    //         } else {
    //             suggestionBox.style.display = 'block';
    //             suggestionBoxVisible = true;
    //             filteredSuggestions.forEach((suggestion, index) => {
    //                 const suggestionElement = createSuggestionElement(suggestion, index);
    //                 suggestionBox.appendChild(suggestionElement);
    //             });

    //             // Set the first filtered suggestion as placeholder
    //             if (filteredSuggestions.length > 0) {
    //                 document.getElementById('barangay-select').placeholder = filteredSuggestions[0];
    //             }
    //         }
    //     }

    //     // Always hover over the first suggestion
    //     selectedIndex = 0;
    //     toggleSelectedSuggestion();
    // }

    // function createSuggestionElement(suggestion, index) {
    //     const suggestionElement = document.createElement('div');
    //     suggestionElement.className = 'suggestion';
    //     suggestionElement.textContent = suggestion;
    //     suggestionElement.onclick = () => {
    //         document.getElementById('barangay-select').value = suggestion;
    //         suggestionBox.style.display = 'none';
    //         suggestionBoxVisible = false;
    //     };
    //     suggestionElement.onmouseover = () => {
    //         selectedIndex = index;
    //         toggleSelectedSuggestion();
    //     };
    //     return suggestionElement;
    // }

    // function toggleSelectedSuggestion() {
    //     const suggestionBox = document.getElementById('suggestionBox');
    //     const suggestionElements = suggestionBox.getElementsByClassName('suggestion');
    //     Array.from(suggestionElements).forEach((suggestionElement, index) => {
    //         suggestionElement.classList.toggle('selected', index === selectedIndex);
    //     });

    //     // Update the placeholder with the selected suggestion
    //     const selectedSuggestion = suggestionElements[selectedIndex];
    //     if (selectedSuggestion) {
    //         document.getElementById('barangay-select').placeholder = selectedSuggestion.textContent;
    //     }
    // }

    // function handleKeyDown(event) {
    //     const suggestionBox = document.getElementById('suggestionBox');
    //     const suggestionElements = suggestionBox.getElementsByClassName('suggestion');

    //     if (event.key === 'ArrowDown') {
    //         event.preventDefault();
    //         selectedIndex = Math.min(selectedIndex + 1, suggestionElements.length - 1);
    //     } else if (event.key === 'ArrowUp') {
    //         event.preventDefault();
    //         selectedIndex = Math.max(selectedIndex - 1, -1);
    //     } else if (event.key === 'Tab' && selectedIndex >= 0) {
    //         event.preventDefault();
    //         const selectedSuggestion = suggestionElements[selectedIndex];
    //         document.getElementById('barangay-select').value = selectedSuggestion.textContent;
    //         suggestionBox.style.display = 'none';
    //         suggestionBoxVisible = false;
    //         selectedIndex = -1;
    //         return;
    //     } else if (event.key === 'Enter' && selectedIndex >= 0) {
    //         event.preventDefault();
    //         const selectedSuggestion = suggestionElements[selectedIndex];
    //         document.getElementById('barangay-select').value = selectedSuggestion.textContent;
    //         suggestionBox.style.display = 'none';
    //         suggestionBoxVisible = false;
    //         selectedIndex = -1;
    //         return;
    //     }

    //     toggleSelectedSuggestion();

    // }

    // function changePlaceholder() {
    //     document.getElementById('barangay-select').placeholder = 'Barangay';
    // }

   
//original copy
// barangay filter droplist
const suggestions = ['APLAYA', 'BALIBAGO', 'CAINGIN', 'DILA', 'DITA', 'DON JOSE', 'IBABA', 'KANLURAN', 'LABAS', 'MACABLING', 'MALITLIT', 'MALUSAK', 'MARKET AREA', 'POOC', 'PULONG SANTA CRUZ', 'SANTO DOMINGO', 'SINALHAN', 'TAGAPO'];
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
            document.getElementById('barangay-select').placeholder = suggestions[0];
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
                document.getElementById('barangay-select').placeholder = filteredSuggestions[0];
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
      document.getElementById('barangay-select').value = suggestion;
      const suggestionBox = document.getElementById('suggestionBox');
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
      document.getElementById('barangay-select').placeholder = selectedSuggestion.textContent;
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
      document.getElementById('barangay-select').value = selectedSuggestion.textContent;
      suggestionBox.style.display = 'none';
      suggestionBoxVisible = false;
      selectedIndex = -1;
      return;
    } else if (event.key === 'Enter' && selectedIndex >= 0) {
      event.preventDefault();
      const selectedSuggestion = suggestionElements[selectedIndex];
      document.getElementById('barangay-select').value = selectedSuggestion.textContent;
      suggestionBox.style.display = 'none';
      suggestionBoxVisible = false;
      selectedIndex = -1;
      return;
    }
  
    toggleSelectedSuggestion();
  }
  
  function changePlaceholder() {
    document.getElementById('barangay-select').placeholder = 'Barangay';
  }
  
// Functions for the modal community textbox

function showAllSuggestionsCommunity() {
  showfilterCommunitySuggestions('');
}

function showfilterCommunitySuggestions(input) {
  const suggestionBox = document.getElementById('communitysearchSuggestionBox');
  suggestionBox.innerHTML = '';

  const suggestions = [
      'COMMUNITY1',
      'COMMUNITY2',
      'COMMUNITY3',
      'COMMUNITY4',
      'COMMUNITY5',
      'COMMUNITY6',
      'COMMUNITY7',
      'COMMUNITY8',
      'COMMUNITY9',
      'COMMUNITY10',
      'COMMUNITY11',
      'COMMUNITY12',
      'COMMUNITY13',
      'COMMUNITY14',
      'COMMUNITY15',
      'COMMUNITY16'
  ];

  const barangayValue = document.getElementById('barangay-select').value;

  if (input.length === 0) {
      suggestionBox.style.display = 'block'; // Show suggestion box
      suggestionBoxVisible = true;

      // SELECTION BASED ON INPUT IN BARANGAY-SELECT
      let filteredSuggestions;
      if (barangayValue === 'APLAYA') {
          filteredSuggestions = suggestions.filter((suggestion) =>
              suggestion === 'COMMUNITY1' || suggestion === 'COMMUNITY2'
          );
      } else if (barangayValue === 'BALIBAGO') {
          filteredSuggestions = suggestions.filter((suggestion) =>
              suggestion === 'COMMUNITY3' || suggestion === 'COMMUNITY4'
          );
      } else {
          filteredSuggestions = suggestions;
      }

      filteredSuggestions.forEach((suggestion, index) => {
          const suggestionElement = createSuggestionElementCommunity(suggestion, index);
          suggestionBox.appendChild(suggestionElement);
      });
  } else {
      const filteredSuggestions = suggestions.filter((suggestion) =>
          suggestion.toLowerCase().startsWith(input.toLowerCase())
      );

      if (filteredSuggestions.length === 0) {
          suggestionBox.style.display = 'none';
          suggestionBoxVisible = false;
      } else {
          suggestionBox.style.display = 'block';
          suggestionBoxVisible = true;
          filteredSuggestions.forEach((suggestion, index) => {
              const suggestionElement = createSuggestionElementCommunity(suggestion, index);
              suggestionBox.appendChild(suggestionElement);
          });

          // Set the first filtered suggestion as placeholder
          if (filteredSuggestions.length > 0) {
              document.getElementById('community-selectSearch').placeholder = filteredSuggestions[0];
          }
      }
  }

  // Always hover over the first suggestion
  selectedIndex = 0;
  toggleSelectedSuggestionCommunity();
}

function createSuggestionElementCommunity(suggestion, index) {
  const suggestionElement = document.createElement('div');
  suggestionElement.className = 'suggestion';
  suggestionElement.textContent = suggestion;
  suggestionElement.addEventListener('click', () => {
      const textbox = document.getElementById('community-selectSearch');
      textbox.value = suggestion;
      const suggestionBox = document.getElementById('communitysearchSuggestionBox');
      suggestionBox.style.display = 'none';
      suggestionBoxVisible = false;
  });
  suggestionElement.addEventListener('mouseover', () => {
      selectedIndex = index;
      toggleSelectedSuggestionCommunity();
  });
  return suggestionElement;
}

function toggleSelectedSuggestionCommunity() {
  const suggestionBox = document.getElementById('communitysearchSuggestionBox');
  const suggestionElements = suggestionBox.getElementsByClassName('suggestion');
  Array.from(suggestionElements).forEach((suggestionElement, index) => {
      suggestionElement.classList.toggle('selected', index === selectedIndex);
  });

  // Update the placeholder with the selected suggestion
  const selectedSuggestion = suggestionElements[selectedIndex];
  if (selectedSuggestion) {
      document.getElementById('community-selectSearch').placeholder = selectedSuggestion.textContent;
  }
}

function handlefilterCommunityKeyDown(event) {
  const suggestionBox = document.getElementById('communitysearchSuggestionBox');
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
      const textbox = document.getElementById('community-selectSearch');
      textbox.value = selectedSuggestion.textContent;
      suggestionBox.style.display = 'none';
      suggestionBoxVisible = false;
      selectedIndex = -1;
      return;
  } else if (event.key === 'Enter' && selectedIndex >= 0) {
      event.preventDefault();
      const selectedSuggestion = suggestionElements[selectedIndex];
      const textbox = document.getElementById('community-selectSearch');
      textbox.value = selectedSuggestion.textContent;
      suggestionBox.style.display = 'none';
      suggestionBoxVisible = false;
      selectedIndex = -1;
      return;
  }

  toggleSelectedSuggestionCommunity();
}

function changefilterCommunityPlaceholder() {
  document.getElementById('community-selectSearch').placeholder = 'Community Association';
}

// Functions for the modal textbox barangay

function showAllSuggestionsModal() {
    showSuggestionsModal('');
}

function showSuggestionsModal(input) {
    
    const suggestionBox = document.getElementById('suggestionBoxModal');
    suggestionBox.innerHTML = '';

    if (input.length === 0) {
        suggestionBox.style.display = 'block'; // Show suggestion box
        suggestionBoxVisible = true;
        suggestions.forEach((suggestion, index) => {
            const suggestionElement = createSuggestionElementModal(suggestion, index);
            suggestionBox.appendChild(suggestionElement);
        });

        // Set the first suggestion as placeholder
        if (suggestions.length > 0) {
            document.getElementById('barangay-select-modal').placeholder = suggestions[0];
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
                const suggestionElement = createSuggestionElementModal(suggestion, index);
                suggestionBox.appendChild(suggestionElement);
            });

            // Set the first filtered suggestion as placeholder
            if (filteredSuggestions.length > 0) {
                document.getElementById('barangay-select-modal').placeholder = filteredSuggestions[0];
            }
        }
    }

    // Always hover over the first suggestion
    selectedIndex = 0;
    toggleSelectedSuggestionModal();
}

function createSuggestionElementModal(suggestion, index) {
    const suggestionElement = document.createElement('div');
    suggestionElement.className = 'suggestion';
    suggestionElement.textContent = suggestion;
    suggestionElement.addEventListener('click', () => {
      const textbox = document.getElementById('barangay-select-modal');
      textbox.value = suggestion;
      const suggestionBox = document.getElementById('suggestionBoxModal');
      suggestionBox.style.display = 'none';
      suggestionBoxVisible = false;
    });
    suggestionElement.addEventListener('mouseover', () => {
      selectedIndex = index;
      toggleSelectedSuggestionModal();
    });
    return suggestionElement;
  }
  
  function toggleSelectedSuggestionModal() {
    const suggestionBox = document.getElementById('suggestionBoxModal');
    const suggestionElements = suggestionBox.getElementsByClassName('suggestion');
    Array.from(suggestionElements).forEach((suggestionElement, index) => {
      suggestionElement.classList.toggle('selected', index === selectedIndex);
    });
  
    // Update the placeholder with the selected suggestion
    const selectedSuggestion = suggestionElements[selectedIndex];
    if (selectedSuggestion) {
      document.getElementById('barangay-select-modal').placeholder = selectedSuggestion.textContent;
    }
  }

  function handleKeyModal(event) {
    const suggestionBox = document.getElementById('suggestionBoxModal');
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
        const textbox = document.getElementById('barangay-select-modal');
        textbox.value = selectedSuggestion.textContent;
        suggestionBox.style.display = 'none';
        suggestionBoxVisible = false;
        selectedIndex = -1;
        return;
    } else if (event.key === 'Enter' && selectedIndex >= 0) {
        event.preventDefault();
        const selectedSuggestion = suggestionElements[selectedIndex];
        const textbox = document.getElementById('barangay-select-modal');
        textbox.value = selectedSuggestion.textContent;
        suggestionBox.style.display = 'none';
        suggestionBoxVisible = false;
        selectedIndex = -1;
        return;
    }

    toggleSelectedSuggestionModal();
}

function convertToUppercase(inputElement) {
    inputElement.value = inputElement.value.toUpperCase();
}

  
  function changePlaceholderModal() {
    document.getElementById('barangay-select-modal').placeholder = 'Barangay';
  }

// Function for housing modal textbox

function showAllSuggestionsHouseModal() {
    showSuggestionsHouseModal('');
  }
  
  function showSuggestionsHouseModal(input) {
    const suggestionBox = document.getElementById('suggestionBoxHouseModal');
    suggestionBox.innerHTML = '';
  
    const suggestions = [
      'FLOOD',
      'LANDSLIDE',
      'SEA LEVEL RISE',
      'DROUGHT',
      'COASTAL AREAS',
      'WATERWAYS',
      'EARTHQUAKE',
      'HUMAN INDUCED DISASTER',
      'INFRASTRUCTURE PROJECTS',
      'EROTION/ DEMOLITION ORDER',
      'THREAT OF EVICTION'
    ];
  
    if (input.length === 0) {
      suggestionBox.style.display = 'block'; // Show suggestion box
      suggestionBoxVisible = true;
      suggestions.forEach((suggestion, index) => {
        const suggestionElement = createSuggestionElementHouseModal(suggestion, index);
        suggestionBox.appendChild(suggestionElement);
      });
  
      // Set the first suggestion as placeholder
      if (suggestions.length > 0) {
        document.getElementById('basicHouse').placeholder = suggestions[0];
      }
    } else {
      const filteredSuggestions = suggestions.filter((suggestion) =>
        suggestion.toLowerCase().startsWith(input.toLowerCase())
      );
  
      if (filteredSuggestions.length === 0) {
        suggestionBox.style.display = 'none';
        suggestionBoxVisible = false;
      } else {
        suggestionBox.style.display = 'block';
        suggestionBoxVisible = true;
        filteredSuggestions.forEach((suggestion, index) => {
          const suggestionElement = createSuggestionElementHouseModal(suggestion, index);
          suggestionBox.appendChild(suggestionElement);
        });
  
        // Set the first filtered suggestion as placeholder
        if (filteredSuggestions.length > 0) {
          document.getElementById('basicHouse').placeholder = filteredSuggestions[0];
        }
      }
    }
  
    // Always hover over the first suggestion
    selectedIndex = 0;
    toggleSelectedSuggestionHouseModal();
  }
  
  function createSuggestionElementHouseModal(suggestion, index) {
    const suggestionElement = document.createElement('div');
    suggestionElement.className = 'suggestion';
    suggestionElement.textContent = suggestion;
    suggestionElement.addEventListener('click', () => {
      const textbox = document.getElementById('basicHouse');
      textbox.value = suggestion;
      const suggestionBox = document.getElementById('suggestionBoxHouseModal');
      suggestionBox.style.display = 'none';
      suggestionBoxVisible = false;
    });
    suggestionElement.addEventListener('mouseover', () => {
      selectedIndex = index;
      toggleSelectedSuggestionHouseModal();
    });
    return suggestionElement;
  }
  
  function toggleSelectedSuggestionHouseModal() {
    const suggestionBox = document.getElementById('suggestionBoxHouseModal');
    const suggestionElements = suggestionBox.getElementsByClassName('suggestion');
    Array.from(suggestionElements).forEach((suggestionElement, index) => {
      suggestionElement.classList.toggle('selected', index === selectedIndex);
    });
  
    // Update the placeholder with the selected suggestion
    const selectedSuggestion = suggestionElements[selectedIndex];
    if (selectedSuggestion) {
      document.getElementById('basicHouse').placeholder = selectedSuggestion.textContent;
    }
  }
  
  function handleKeyHouseModal(event) {
    const suggestionBox = document.getElementById('suggestionBoxHouseModal');
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
      const textbox = document.getElementById('basicHouse');
      textbox.value = selectedSuggestion.textContent;
      suggestionBox.style.display = 'none';
      suggestionBoxVisible = false;
      selectedIndex = -1;
      return;
    } else if (event.key === 'Enter' && selectedIndex >= 0) {
      event.preventDefault();
      const selectedSuggestion = suggestionElements[selectedIndex];
      const textbox = document.getElementById('basicHouse');
      textbox.value = selectedSuggestion.textContent;
      suggestionBox.style.display = 'none';
      suggestionBoxVisible = false;
      selectedIndex = -1;
      return;
    }
  
    toggleSelectedSuggestionHouseModal();
  }
  
  function changePlaceholderHouseModal() {
    document.getElementById('basicHouse').placeholder = 'Basic Housing Data';
  }
  
// Function for Community Association Modal
function showAllSuggestionsCommunityModal() {
  showSuggestionsCommunityModal('');
}

function showSuggestionsCommunityModal(input) {
  const suggestionBox = document.getElementById('communitySuggestionBox');
  suggestionBox.innerHTML = '';

  const suggestions = [
    'COMMUNITY1',
    'COMMUNITY2',
    'COMMUNITY3',
    'COMMUNITY4',
    'COMMUNITY5',
    'COMMUNITY6',
    'COMMUNITY7',
    'COMMUNITY8',
    'COMMUNITY9',
    'COMMUNITY10',
    'COMMUNITY11',
    'COMMUNITY12',
    'COMMUNITY13',
    'COMMUNITY14',
    'COMMUNITY15',
    'COMMUNITY16'
  ];
  

  const barangayValue = document.getElementById('barangay-select-modal').value;

  if (input.length === 0) {
    suggestionBox.style.display = 'block'; // Show suggestion box
    suggestionBoxVisible = true;
    
    //SELECTION BASED ON INPUT IN BARANGAY-SELECT-MODAL
    let filteredSuggestions;
    if (barangayValue === 'APLAYA') {
      filteredSuggestions = suggestions.filter((suggestion) =>
        suggestion === 'COMMUNITY1' || suggestion === 'COMMUNITY2'
      );
    }  else if (barangayValue === 'BALIBAGO') {
      filteredSuggestions = suggestions.filter((suggestion) =>
        suggestion === 'COMMUNITY3' || suggestion === 'COMMUNITY4'
      );
    }
    else {
      filteredSuggestions = suggestions;
    }

    filteredSuggestions.forEach((suggestion, index) => {
      const suggestionElement = createSuggestionElementCommunityModal(suggestion, index);
      suggestionBox.appendChild(suggestionElement);
    });
  } else {
      const filteredSuggestions = suggestions.filter((suggestion) =>
          suggestion.toLowerCase().startsWith(input.toLowerCase())
      );

      if (filteredSuggestions.length === 0) {
          suggestionBox.style.display = 'none';
          suggestionBoxVisible = false;
      } else {
          suggestionBox.style.display = 'block';
          suggestionBoxVisible = true;
          filteredSuggestions.forEach((suggestion, index) => {
              const suggestionElement = createSuggestionElementCommunityModal(suggestion, index);
              suggestionBox.appendChild(suggestionElement);
          });

          // Set the first filtered suggestion as placeholder
          if (filteredSuggestions.length > 0) {
              document.getElementById('community-select').placeholder = filteredSuggestions[0];
          }
      }
  }

  // Always hover over the first suggestion
  selectedIndex = 0;
  toggleSelectedSuggestionCommunityModal();
}

function createSuggestionElementCommunityModal(suggestion, index) {
  const suggestionElement = document.createElement('div');
  suggestionElement.className = 'suggestion';
  suggestionElement.textContent = suggestion;
  suggestionElement.addEventListener('click', () => {
      const textbox = document.getElementById('community-select');
      textbox.value = suggestion;
      const suggestionBox = document.getElementById('communitySuggestionBox');
      suggestionBox.style.display = 'none';
      suggestionBoxVisible = false;
  });
  suggestionElement.addEventListener('mouseover', () => {
      selectedIndex = index;
      toggleSelectedSuggestionCommunityModal();
  });
  return suggestionElement;
}

function toggleSelectedSuggestionCommunityModal() {
  const suggestionBox = document.getElementById('communitySuggestionBox');
  const suggestionElements = suggestionBox.getElementsByClassName('suggestion');
  Array.from(suggestionElements).forEach((suggestionElement, index) => {
      suggestionElement.classList.toggle('selected', index === selectedIndex);
  });

  // Update the placeholder with the selected suggestion
  const selectedSuggestion = suggestionElements[selectedIndex];
  if (selectedSuggestion) {
      document.getElementById('community-select').placeholder = selectedSuggestion.textContent;
  }
}

function handleCommunityModalKeyDown(event) {
  const suggestionBox = document.getElementById('communitySuggestionBox');
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
      const textbox = document.getElementById('community-select');
      textbox.value = selectedSuggestion.textContent;
      suggestionBox.style.display = 'none';
      suggestionBoxVisible = false;
      selectedIndex = -1;
      return;
  } else if (event.key === 'Enter' && selectedIndex >= 0) {
      event.preventDefault();
      const selectedSuggestion = suggestionElements[selectedIndex];
      const textbox = document.getElementById('community-select');
      textbox.value = selectedSuggestion.textContent;
      suggestionBox.style.display = 'none';
      suggestionBoxVisible = false;
      selectedIndex = -1;
      return;
  }

  toggleSelectedSuggestionCommunityModal();
}

function changeCommunityPlaceholder() {
  document.getElementById('community-select').placeholder = 'Community Association';
}
