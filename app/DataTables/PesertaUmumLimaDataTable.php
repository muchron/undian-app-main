<?php

namespace App\DataTables;

use App\Models\PesertaUmumLima;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PesertaUmumLimaDataTable extends DataTable
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
            ->addIndexColumn('DT_RowIndex')
            ->editColumn('tanggal_lahir', function ($query) {
                return \Carbon\Carbon::parse($query->tanggal_lahir)->format('d-m-Y');
            })
            ->editColumn('saldo', function ($query) {
                return number_format($query->saldo, 0, ',', '.');
            })
            ->addColumn('action', function ($query) {
                return view('admin.contents.peserta_umum_lima.actions.buttons', compact('query'));
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\PesertaUmumLima $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(PesertaUmumLima $model)
    {
        return $model->where('status', '!=', '1')->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('pesertaumumlima-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1);
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
            Column::make('noreg')->title('No. Register'),
            Column::make('nik')->title('Nomor Induk Kependudukan (NIK)'),
            Column::make('nama_peserta'),
            Column::make('tanggal_lahir')->width(200),
            Column::make('saldo'),
            Column::make('poin')->addClass('text-center'),
            Column::computed('action')->addClass('text-center')->width(100)->title('Aksi')
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'PesertaUmumLima_' . date('YmdHis');
    }
}
