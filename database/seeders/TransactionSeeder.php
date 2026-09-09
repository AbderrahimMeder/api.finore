<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Account;
use App\Models\Transictions;

class TransactionSeeder extends Seeder
{
    public function run(): void
    {
        $account = Account::first();

        if (!$account) {
            return;
        }

        $transactions = [
            [
                'account_id' => $account->id,
                'amount' => 6000.00,
                'title' => 'Monthly Salary',
                'type' => 'INCOME',
                'category' => 'Salary',
                'description' => 'Monthly salary',
                'date' => '2026-09-01',
                'currency' => 'MAD',
                'payment_method' => 'BANK_TRANSFER',
                'status' => 'COMPLETED',
            ],
            [
                'account_id' => $account->id,
                'amount' => 2500.00,
                'title' => 'Rent',
                'type' => 'EXPENSE',
                'category' => 'Housing',
                'description' => 'Monthly apartment rent',
                'date' => '2026-09-02',
                'currency' => 'MAD',
                'payment_method' => 'BANK_TRANSFER',
                'status' => 'COMPLETED',
            ],
            [
                'account_id' => $account->id,
                'amount' => 800.00,
                'title' => 'Groceries',
                'type' => 'EXPENSE',
                'category' => 'Food',
                'description' => 'Weekly groceries',
                'date' => '2026-09-03',
                'currency' => 'MAD',
                'payment_method' => 'CARD',
                'status' => 'COMPLETED',
            ],
            [
                'account_id' => $account->id,
                'amount' => 300.00,
                'title' => 'Transportation',
                'type' => 'EXPENSE',
                'category' => 'Transport',
                'description' => 'Taxi and transportation',
                'date' => '2026-09-04',
                'currency' => 'MAD',
                'payment_method' => 'CASH',
                'status' => 'COMPLETED',
            ],
            [
                'account_id' => $account->id,
                'amount' => 1000.00,
                'title' => 'Freelance Project',
                'type' => 'INCOME',
                'category' => 'Freelance',
                'description' => 'Payment for freelance project',
                'date' => '2026-09-05',
                'currency' => 'MAD',
                'payment_method' => 'BANK_TRANSFER',
                'status' => 'COMPLETED',
            ],
            [
                'account_id' => $account->id,
                'amount' => 450.00,
                'title' => 'Entertainment',
                'type' => 'EXPENSE',
                'category' => 'Entertainment',
                'description' => 'Cinema and activities',
                'date' => '2026-09-06',
                'currency' => 'MAD',
                'payment_method' => 'CARD',
                'status' => 'COMPLETED',
            ],
            [
                'account_id' => $account->id,
                'amount' => 150.00,
                'title' => 'Internet Bill',
                'type' => 'EXPENSE',
                'category' => 'Bills',
                'description' => 'Monthly internet subscription',
                'date' => '2026-09-06',
                'currency' => 'MAD',
                'payment_method' => 'CARD',
                'status' => 'COMPLETED',
            ],
            [
                'account_id' => $account->id,
                'amount' => 500.00,
                'title' => 'Cashback',
                'type' => 'INCOME',
                'category' => 'Other',
                'description' => 'Cashback received',
                'date' => '2026-09-07',
                'currency' => 'MAD',
                'payment_method' => 'CARD',
                'status' => 'COMPLETED',
            ],
        ];

        foreach ($transactions as $transaction) {
            Transictions::create($transaction);
        }
    }
}


