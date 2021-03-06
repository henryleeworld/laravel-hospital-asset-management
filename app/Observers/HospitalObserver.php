<?php

namespace App\Observers;

use App\Models\Asset;
use App\Models\Stock;
use App\Models\Hospital;

/**
 * Class HospitalObserver
 * @package App\Observers
 */
class HospitalObserver
{
    /**
     * Handle the hospital "created" event.
     *
     * @param  \App\Hospital  $hospital
     * @return void
     */
    public function created(Hospital $hospital)
    {
        $assets = Asset::all();

        foreach ($assets as $asset) {
            Stock::factory()->create([
                'asset_id' => $asset->id,
                'hospital_id'  => $hospital->id,
            ]);
        }
    }

    /**
     * Handle the hospital "updated" event.
     *
     * @param  \App\Hospital  $hospital
     * @return void
     */
    public function updated(Hospital $hospital)
    {
        //
    }

    /**
     * Handle the hospital "deleted" event.
     *
     * @param  \App\Hospital  $hospital
     * @return void
     */
    public function deleted(Hospital $hospital)
    {
        //
    }

    /**
     * Handle the hospital "restored" event.
     *
     * @param  \App\Hospital $hospital
     * @return void
     */
    public function restored(Hospital $hospital)
    {
        //
    }

    /**
     * Handle the hospital "force deleted" event.
     *
     * @param  \App\Hospital  $hospital
     * @return void
     */
    public function forceDeleted(Hospital $hospital)
    {
        //
    }
}
