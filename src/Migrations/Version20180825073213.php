<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180825073213 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE address (id INT AUTO_INCREMENT NOT NULL, post_code INT NOT NULL, personal_id INT NOT NULL, regional_code_id INT NOT NULL, district VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, street VARCHAR(255) NOT NULL, house_no VARCHAR(255) NOT NULL, flat VARCHAR(255) NOT NULL, number_of_people INT NOT NULL, type_of_ownership INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE financial_property (id INT AUTO_INCREMENT NOT NULL, type_id INT NOT NULL, description VARCHAR(255) NOT NULL, type_of_ownership_id INT NOT NULL, is_collateral TINYINT(1) NOT NULL, address VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE jur_address (id INT AUTO_INCREMENT NOT NULL, personal_id INT NOT NULL, post_code INT NOT NULL, regional_code_id INT NOT NULL, district VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, street VARCHAR(255) NOT NULL, house_no VARCHAR(255) NOT NULL, flat VARCHAR(255) NOT NULL, jur_address_is_address TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, personal_id INT NOT NULL, client_email VARCHAR(255) NOT NULL, contact_persons_contacts VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE family_status (id INT AUTO_INCREMENT NOT NULL, personal_id INT NOT NULL, family_status_id INT NOT NULL, spouse_first_name VARCHAR(255) NOT NULL, spouse_second_name VARCHAR(255) NOT NULL, spouse_last_name VARCHAR(255) NOT NULL, spouse_birth_day DATE DEFAULT NULL, spouse_date_of_marriage DATE DEFAULT NULL, dependant_number INT NOT NULL, children_under18number_id INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE financial_debts (id INT AUTO_INCREMENT NOT NULL, type_id INT NOT NULL, currency_id INT NOT NULL, amount VARCHAR(255) NOT NULL, residual_amount VARCHAR(255) NOT NULL, monthly_payment VARCHAR(255) NOT NULL, start_date VARCHAR(255) NOT NULL, end_date DATE NOT NULL, bank_name VARCHAR(255) NOT NULL, state_id INT NOT NULL, pesonal_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE identification (id INT AUTO_INCREMENT NOT NULL, personal_id INT NOT NULL, passport_no VARCHAR(100) NOT NULL, passport_issue_date DATE NOT NULL, passport_issue_place VARCHAR(255) NOT NULL, id_code INT NOT NULL, nalog_register_date DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE application (id INT AUTO_INCREMENT NOT NULL, manager_mark_id INT NOT NULL, down_payment_amount DOUBLE PRECISION NOT NULL, requested_loan_amount DOUBLE PRECISION NOT NULL, purchase_loan_request LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', requested_loan_term INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE experience (id INT AUTO_INCREMENT NOT NULL, work_place_name VARCHAR(255) NOT NULL, work_place_tax_number INT NOT NULL, work_place_area_id INT NOT NULL, work_position_type_id INT NOT NULL, work_position VARCHAR(255) NOT NULL, work_addr VARCHAR(255) NOT NULL, work_phone VARCHAR(255) NOT NULL, work_schedule_id INT NOT NULL, work_start_date DATE NOT NULL, work_experience VARCHAR(255) NOT NULL, pyfxtybt VARCHAR(255) NOT NULL, work_general_experience INT NOT NULL, education_level_id INT NOT NULL, prev_work_place_name VARCHAR(255) NOT NULL, prev_work_position VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE financial_incomes (id INT AUTO_INCREMENT NOT NULL, monthly_amount LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', monthly_type_id LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', pesonal_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE address');
        $this->addSql('DROP TABLE financial_property');
        $this->addSql('DROP TABLE jur_address');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE family_status');
        $this->addSql('DROP TABLE financial_debts');
        $this->addSql('DROP TABLE identification');
        $this->addSql('DROP TABLE application');
        $this->addSql('DROP TABLE experience');
        $this->addSql('DROP TABLE financial_incomes');
    }
}
