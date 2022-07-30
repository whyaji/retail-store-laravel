var movieList = {};
const storageMovie = "storage-movie";

if(movieListFromLocal = localStorage.getItem(storageMovie)){
    movieList = JSON.parse(movieListFromLocal);
    
    for(var key in movieList){
        createRow(key, movieList[key]);
    }
}

$(document).ready(function () {
    $('#btnAdd').click(function () {
        var title = $('#txtTitle').val().trim();
        var rating = $('#txtRating').val().trim();

        if (title != '' && rating != '') {
            // creating dynamic html string
            createRow(title, rating);
            syncLocalStorage('ADD', title, rating);
            clearForm();
        } else {
            alert('Harap lengkapi form title dan rating');
        }
    });

    $('#txtSearch').on('keyup', function () {
        var value = $(this).val().toLowerCase();
        $('#tblData .table__item').filter(function () {
            $(this).toggle($(this).find('td:eq(0)').text().toLowerCase().indexOf(value) > -1);
        });
    });

    $('tbody').on('click', '.delete', function(){
        $(this).parent('tr').remove();
        syncLocalStorage('DELETE', $(this).prev().prev().text());
    });

    // sort by name
    $('table').on('click', '.sort-name', function(){
        sort('tbody', 'tr', '.name');
    });

    // sort by rating
    $('table').on('click', '.sort-rating', function(){
        sort('tbody', 'tr', '.rating');
    });
});

function createRow(title, rating) {
    if ($('#tblData tbody').children().children().length == 1) {
        $('#tblData tbody').html('');
    }
    
    var dynamicTr = `<tr class="table__item">
                        <td class="name">${title}</td>
                        <td class="rating">${rating}</td>
                        <td class="delete"> <button class="button btn-delete"> delete </button> </td>
                    </tr>`;
    $('#tblData tbody').append(dynamicTr);
}

function clearForm() {
    $('#txtTitle').val('');
    $('#txtRating').val('');
}

function syncLocalStorage(activity, name, rating){
    switch(activity){
        case 'ADD':
            movieList[name] = rating;
            break;
        case 'DELETE':
            delete movieList[name];
            break;
        default:
            break;
    }

    localStorage.setItem(storageMovie, JSON.stringify(movieList));
    return;
}

function sort(parent, child, grandchild){
    $(parent).children(child).sort(function(a, b){
        var A = $(a).children(grandchild).text().toUpperCase();
        var B = $(b).children(grandchild).text().toUpperCase();
        return (A < B) ? -1 : (A > B) ? 1 : 0;
    }).appendTo(parent);
}