<?php

// ===================== BOOK CLASS =====================
class Book
{
    public string $Title;
    public string $Author;
    public bool $Availability;

    public function __construct(string $title, string $author)
    {
        $this->Title = $title;
        $this->Author = $author;
        $this->Availability = true;
    }

    public function BorrowBook()
    {
        if ($this->Availability) {
            $this->Availability = false;
            echo "You borrowed: {$this->Title}\n";
        } else {
            echo "The book '{$this->Title}' is NOT available.\n";
        }
    }

    public function ReturnBook()
    {
        $this->Availability = true;
        echo "You returned: {$this->Title}\n";
    }

    public function DisplayBookDetails()
    {
        $availableText = $this->Availability ? "Available" : "Not Available";
        echo "Title: {$this->Title}, Author: {$this->Author}, Status: {$availableText}\n";
    }
}


// ===================== MEMBER CLASS =====================
class Member
{
    public string $Name;
    public int $MemberId;
    public array $BorrowedBooks;

    public function __construct(string $name, int $memberId)
    {
        $this->Name = $name;
        $this->MemberId = $memberId;
        $this->BorrowedBooks = [];
    }

    public function BorrowBook(Book $book)
    {
        if ($book->Availability) {
            $book->BorrowBook();
            $this->BorrowedBooks[] = $book;
        } else {
            echo "This book cannot be borrowed.\n";
        }
    }

    public function ReturnBook(Book $book)
    {
        $index = array_search($book, $this->BorrowedBooks, true);

        if ($index !== false) {
            $book->ReturnBook();
            unset($this->BorrowedBooks[$index]);
        } else {
            echo "This member did NOT borrow this book.\n";
        }
    }

    public function DisplayMemberDetails()
    {
        echo "\nMember Name: {$this->Name}, ID: {$this->MemberId}\n";
        echo "Borrowed Books:\n";

        if (count($this->BorrowedBooks) == 0) {
            echo "  None\n";
        } else {
            foreach ($this->BorrowedBooks as $b) {
                echo "  - {$b->Title}\n";
            }
        }
    }
}


// ===================== LIBRARY CLASS =====================
class Library
{
    public array $Books = [];
    public array $Members = [];

    public function AddBook(Book $book)
    {
        $this->Books[] = $book;
        echo "Book added: {$book->Title}\n";
    }

    public function RemoveBook(Book $book)
    {
        $index = array_search($book, $this->Books, true);
        if ($index !== false) {
            unset($this->Books[$index]);
            echo "Book removed: {$book->Title}\n";
        }
    }

    public function AddMember(Member $member)
    {
        $this->Members[] = $member;
        echo "Member added: {$member->Name}\n";
    }

    public function RemoveMember(Member $member)
    {
        $index = array_search($member, $this->Members, true);
        if ($index !== false) {
            unset($this->Members[$index]);
            echo "Member removed: {$member->Name}\n";
        }
    }

    public function DisplayAllBooks()
    {
        echo "\n=== ALL BOOKS ===\n";
        foreach ($this->Books as $book) {
            $book->DisplayBookDetails();
        }
    }

    public function DisplayAllMembers()
    {
        echo "\n=== ALL MEMBERS ===\n";
        foreach ($this->Members as $member) {
            $member->DisplayMemberDetails();
        }
    }
}


// ===================== MAIN PROGRAM =====================
$library = new Library();

// Add sample books
$library->AddBook(new Book("Harry Potter", "J.K. Rowling"));
$library->AddBook(new Book("The Hobbit", "J.R.R. Tolkien"));
$library->AddBook(new Book("Sherlock Holmes", "Arthur Conan Doyle"));

// Add sample member
$member = new Member("Rajesh", 1);
$library->AddMember($member);

// Menu loop
while (true) {
    echo "\n===== LIBRARY MENU =====\n";
    echo "1. Display All Books\n";
    echo "2. Display All Members\n";
    echo "3. Borrow a Book\n";
    echo "4. Return a Book\n";
    echo "5. Exit\n";
    echo "Choose an option: ";

    $choice = readline();

    switch ($choice) {
        case "1":
            $library->DisplayAllBooks();
            break;

        case "2":
            $library->DisplayAllMembers();
            break;

        case "3":
            echo "Enter book title to borrow: ";
            $title = readline();
            $found = null;

            foreach ($library->Books as $b) {
                if (strtolower($b->Title) === strtolower($title)) {
                    $found = $b;
                    break;
                }
            }

            if ($found) {
                $member->BorrowBook($found);
            } else {
                echo "Book not found.\n";
            }
            break;

        case "4":
            echo "Enter book title to return: ";
            $title = readline();
            $found = null;

            foreach ($member->BorrowedBooks as $b) {
                if (strtolower($b->Title) === strtolower($title)) {
                    $found = $b;
                    break;
                }
            }

            if ($found) {
                $member->ReturnBook($found);
            } else {
                echo "You didn't borrow this book.\n";
            }
            break;

        case "5":
            echo "Exiting...\n";
            exit;

        default:
            echo "Invalid option. Try again.\n";
    }
}

?>
