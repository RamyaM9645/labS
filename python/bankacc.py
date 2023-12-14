class BankAccount:
    def __init__(self, account_number, account_holder_name, account_type, balance=0.0):
        self.account_number = account_number
        self.account_holder_name = account_holder_name
        self.account_type = account_type
        self.balance = balance

    def deposit(self, amount):
        if amount > 0:
            self.balance += amount
            print(f"Deposited ${amount}. New balance: ${self.balance}")
        else:
            print("Invalid deposit amount. Amount must be greater than 0.")

    def withdraw(self, amount):
        if 0 < amount <= self.balance:
            self.balance -= amount
            print(f"Withdrew ${amount}. New balance: ${self.balance}")
        else:
            print("Invalid withdrawal amount. Amount must be greater than 0 and less than or equal to the balance.")


account1 = BankAccount("123456", "John Doe", "Savings", 1000.0)

print(f"Account Number: {account1.account_number}")
print(f"Account Holder: {account1.account_holder_name}")
print(f"Account Type: {account1.account_type}")
print(f"Balance: ${account1.balance}")

account1.deposit(500)
account1.withdraw(200)
account1.withdraw(800)  