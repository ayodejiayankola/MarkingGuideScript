<?php


class Menu
{

}



while( true ) {

    // Print the menu on console
    printMenu();

    // Read user choice
    $choice = trim( fgets(STDIN) );

    // Exit application
    if( $choice == 5 ) {
        break;
    }

    // Act based on user choice
    switch( $choice ) {

        case 1:
        {
            chooseSource();

            break;
        }
        case 2:
        {
            break;
        }
        case 3:
        {
            break;
        }
        case 4:
        {
            break;
        }
        default:
        {
            echo "\n\nNo choice is entered. Please provide a valid choice.\n\n";
        }
    }
}

function printMenu() {

    echo "************ Marking Guide System ******************\n";
    echo "1 - Create a new marking guide\n";
    echo "2 - Delete a marking guide\n";
    echo "3 - List all available marking guide\n";
    echo "4 - Score a paper\n";
    echo "5 - Quit\n";
    echo "************ Marking Guide System******************\n";
    echo "Enter your choice from 1 to 5 ::";
}

function chooseSource() {

    // Logic to choose source location
}