<?php

namespace App\DataTables;

use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use App\Models\PemenangUndianUmumLima;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PemenangUndianUmumLimaDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addIndexColumn('DT_RowIndex');
            // ->addColumn('action', function ($query) {
            //     return view('admin.contents.pemenang_undian_umum.actions.buttons', compact('query'));
            // });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\PemenangUndianUmumLima $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(PemenangUndianUmumLima $model)
    {
        return $model->with('undian');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('pemenangundianumumlima-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(3);
                    // ->buttons(
                    //     Button::make('create'),
                    //     Button::make('export'),
                    //     Button::make('print'),
                    //     Button::make('reset'),
                    //     Button::make('reload')
                    // );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::computed('DT_RowIndex')->addClass('text-center')->width(10)->title('#'),
            Column::make('undian.nomor_undian')->title('No. Undian'),
            Column::make('undian.nama_peserta')->title('Nama Peserta'),
            Column::make('created_at')->visible(false),
            // Column::computed('action')->addClass('text-center')->width(100)->title('Aksi')
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'PemenangUndianUmumLima_' . date('YmdHis');
    }
}
