document.addEventListener('DOMContentLoaded', function() {
    const dropdownWrapper = document.getElementById('produtos-dropdown-wrapper');
    const dropdownContent = document.getElementById('produtos-dropdown-content');

    if (!dropdownWrapper || !dropdownContent) {
        console.error('Um ou mais elementos do menu dropdown não foram encontrados. Verifique os IDs.');
        return; 
    }
    function showDropdown() {
        dropdownContent.classList.add('show');
    }

    function hideDropdown() {
        dropdownContent.classList.remove('show');
    }
    dropdownWrapper.addEventListener('mouseenter', showDropdown);
    dropdownWrapper.addEventListener('mouseleave', hideDropdown);
});