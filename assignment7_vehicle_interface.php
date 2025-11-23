<?php

// ===================== Interface =====================
interface IVehiculo
{
    public function Drive(): void;
    public function Refuel(int $amount): bool;
}


// ===================== Car Class =====================
class Car implements IVehiculo
{
    private int $gasoline;

    public function __construct(int $initialGasoline)
    {
        $this->gasoline = $initialGasoline;
    }

    public function Drive(): void
    {
        if ($this->gasoline > 0) {
            echo "The car is Driving...\n";
        } else {
            echo "The car cannot drive. No gasoline!\n";
        }
    }

    public function Refuel(int $amount): bool
    {
        $this->gasoline += $amount;
        return true;
    }
}


// ===================== MAIN PROGRAM =====================
echo "=== Car Gasoline Test ===\n";

// Car starts with 0 gasoline
$car = new Car(0);

// Ask user for gasoline amount
$gasolineAmount = (int)readline("Enter amount of gasoline to refuel: ");

if ($car->Refuel($gasolineAmount)) {
    echo "The car has been refueled with $gasolineAmount units of gasoline.\n";
}

// Try to drive
$car->Drive();

?>
