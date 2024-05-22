<?php

declare(strict_types=1);

namespace Kata;

class ExpenseReport
{
    function print_report($expenses)
    {
        $mealExpenses = 0;
        $total = 0;
        $date = date("Y-m-d h:i:sa");
        print("Expense Report {$date}\n");
        foreach ($expenses as $expense) {
            if ($expense->type == ExpenseType::DINNER || $expense->type == ExpenseType::BREAKFAST) {
                $mealExpenses += $expense->amount;
            }
            $expenseName = "";
            switch ($expense->type) {
                case ExpenseType::DINNER:
                    $expenseName = "Dinner";
                    break;
                case ExpenseType::BREAKFAST:
                    $expenseName = "Breakfast";
                    break;
                case ExpenseType::CAR_RENTAL:
                    $expenseName = "Car Rental";
                    break;
            }

            $mealOverExpensesMarker = $expense->type == ExpenseType::DINNER && $expense->amount > 5000 || $expense->type == ExpenseType::BREAKFAST && $expense->amount > 1000 ? "X" : " ";
            print($expenseName . "\t" . $expense->amount . "\t" . $mealOverExpensesMarker . "\n");
            $total += $expense->amount;
        }
        print("Meal Expenses: " . $mealExpenses . "\n");
        print("Total Expenses: " . $total . "\n");
    }
}
