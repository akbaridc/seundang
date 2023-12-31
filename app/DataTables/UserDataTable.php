<?php

namespace App\DataTables;

use App\Models\Member\Member;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class UserDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable()
    {
        $query = Member::query()->orderBy('updated_at', 'desc');
        return datatables()
            ->eloquent($query)
            ->addColumn('action', function ($query) {
                $btn = '<a href="" class="btn btn-primary btn-sm"><i class="las la-pen"></i></a>';
                $btn .= '<a href="" class="btn btn-danger btn-sm"><i class="las la-trash"></i></a>';

                return $btn;
            })
            ->addColumn('update', function ($query) {
                return $query->updated_at->diffForHumans();
            })
            ->rawColumns(['action', 'update'])
            ->addIndexColumn();
    }

    /**
     * Get query source of dataTable.
     *
     * @param \User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->addTableClass('table table-bordered dt-responsive nowrap table-striped align-middle w-100')
            ->setTableId('draft_pengajuan-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
            ->lengthMenu([
                [10, 25, 50, 100],
                ['10 rows', '25 rows', '50 rows', '100 rows']
            ])
            ->buttons(
                Button::make('pageLength'),
                Button::make('excel'),
                Button::make('print'),
                Button::make('pdf'),
                // Button::make('reset'),
                // Button::make('reload')
            );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make("DT_RowIndex")->title("No")->orderable(false)->searchable(false)->exportable(false),
            Column::make("name")->title("Nama"),
            Column::make("email")->title("Email"),
            Column::make("phone")->title("No. HP"),
            Column::make("address")->title("Alamat"),
            Column::make("gender_description")->title("Jenis Kelamin"),
            Column::computed('update')->name("updated_at")->title("Terakhir di Update"),
            Column::computed('action')->title('Aksi')->orderable(false)->searchable(false)->exportable(false),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'User_' . date('YmdHis');
    }
}
