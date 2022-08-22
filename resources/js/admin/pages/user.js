$.on('/admin/user', function() {
    $('#access').select2();
    $('#access').on('select2:selecting', function(e) {
        $.request('/admin/role', { id: window._id, role: e.params.args.data.id });
    });

    $('[data-currency-balance]').on('input', function() {
        if(isNaN(parseFloat($(this).val()))) return;
        $.request('/admin/balance', { id: window._id, balance: parseFloat($(this).val()), currency: $(this).attr('data-currency-balance') });
    });

    $('#datatable').DataTable({
        destroy: true,
        "order": [[ 1, "desc" ]],
        "language": {
            "paginate": {
                "previous": "<i class='uil uil-angle-left'>",
                "next": "<i class='uil uil-angle-right'>"
            }
        },
        "drawCallback": function () {
            $('.dataTables_paginate > .pagination').addClass('pagination-rounded');
        }
    });

    $('#transactions').DataTable({
        destroy: true,
        "order": [[ 0, "desc" ]],
        "language": {
            "paginate": {
                "previous": "<i class='uil uil-angle-left'>",
                "next": "<i class='uil uil-angle-right'>"
            }
        },
        "drawCallback": function () {
            $('.dataTables_paginate > .pagination').addClass('pagination-rounded');
        }
    });
});
