# Project Group-5: Secure and Scalable Web Infrastructure on AWS

This repository contains the source code and documentation for the web project deployed on an EC2 instance with a LAMP server (Linux, Apache, MySQL/MariaDB, and PHP).

## Project Structure

- `insert.php`: Form for entering new contacts.
- `view.php`: Displays registered contacts.
- `connection.php`: Database connection file.
- `style.css`: Website styles.

## Deployment on AWS EC2

1. Create an EC2 instance - AWS 
2. Install Apache, PHP, and MariaDB.
3. Clone this repository:
```bash
git clone https://github.com/JCST8903/Project-Group5.git
cd Project-Group5
sudo cp * /var/www/html/
