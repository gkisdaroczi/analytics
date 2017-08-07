function changeLibrary(e) {
    //console.log(e);

    document.getElementById('form').action = e.target.value;
}

var select = document.getElementById('library-select');

select.addEventListener('change', changeLibrary);
