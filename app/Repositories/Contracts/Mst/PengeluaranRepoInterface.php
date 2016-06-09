<?php 

namespace App\Repositories\Contracts\Mst;

interface PengeluaranRepoInterface 
{
 
	public function getJmlPengeluaranBulanan($mst_cabang_id = null, $bln, $thn);

	public function getByBln($perPage = null, $bln, $thn);

	public function getByTgl($perPage = null, $tgl);

	public function getJmlPengeluaranHarian($tgl);

}