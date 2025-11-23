<?php

// =================== PhotoBook Class ===================
class PhotoBook
{
    private int $numPages;

    // Default constructor → 16 pages
    public function __construct(int $pages = 16)
    {
        $this->numPages = $pages;
    }

    // Public method to get number of pages
    public function GetNumberPages(): int
    {
        return $this->numPages;
    }
}


// =================== BigPhotoBook Class ===================
class BigPhotoBook extends PhotoBook
{
    // Always creates a 64-page album
    public function __construct()
    {
        parent::__construct(64);
    }
}


// =================== PhotoBookTest Class ===================
class PhotoBookTest
{
    public static function Main()
    {
        echo "=== PhotoBook Test ===\n\n";

        // 1. Default photo book (16 pages)
        $defaultPhotoBook = new PhotoBook();
        echo "Default Photo Book pages: " . $defaultPhotoBook->GetNumberPages() . "\n";

        // 2. Photo book with 24 pages
        $customPhotoBook = new PhotoBook(24);
        echo "Custom Photo Book (24 pages): " . $customPhotoBook->GetNumberPages() . "\n";

        // 3. Big photo book (64 pages)
        $bigPhotoBook = new BigPhotoBook();
        echo "Big Photo Book pages: " . $bigPhotoBook->GetNumberPages() . "\n";
    }
}


// Run the test
PhotoBookTest::Main();

?>
