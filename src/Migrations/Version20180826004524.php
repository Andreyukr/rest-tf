<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180826004524 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        $this->addSql('CREATE TABLE credit_products (id INT AUTO_INCREMENT NOT NULL, name_product VARCHAR(255) NOT NULL, type_product VARCHAR(255) NOT NULL, conditions VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE financial_expences CHANGE monthly_amount monthly_amount VARCHAR(255) NOT NULL, CHANGE monthly_type_id monthly_type_id INT NOT NULL');
        $this->addSql('ALTER TABLE address CHANGE regional_code_id regional_code_id INT NOT NULL');
        $this->addSql('ALTER TABLE jur_address CHANGE regional_code_id regional_code_id INT NOT NULL');
        $this->addSql('ALTER TABLE contact CHANGE contact_persons_contacts contact_persons_contacts LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\'');
        $this->addSql('ALTER TABLE identification CHANGE id_code id_code INT NOT NULL');
        $this->addSql('ALTER TABLE experience CHANGE work_place_tax_number work_place_tax_number INT NOT NULL, CHANGE work_start_date work_start_date VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE financial_incomes CHANGE monthly_amount monthly_amount VARCHAR(255) NOT NULL, CHANGE monthly_type_id monthly_type_id INT NOT NULL');

    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE credit_products');
        $this->addSql('ALTER TABLE address CHANGE regional_code_id regional_code_id VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE contact CHANGE contact_persons_contacts contact_persons_contacts LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE experience CHANGE work_place_tax_number work_place_tax_number VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE work_start_date work_start_date VARCHAR(250) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE financial_expences CHANGE monthly_amount monthly_amount TINYTEXT NOT NULL COLLATE utf8mb4_unicode_ci COMMENT \'(DC2Type:array)\', CHANGE monthly_type_id monthly_type_id TINYTEXT NOT NULL COLLATE utf8mb4_unicode_ci COMMENT \'(DC2Type:array)\'');
        $this->addSql('ALTER TABLE financial_incomes CHANGE monthly_amount monthly_amount TINYTEXT NOT NULL COLLATE utf8mb4_unicode_ci COMMENT \'(DC2Type:array)\', CHANGE monthly_type_id monthly_type_id TINYTEXT NOT NULL COLLATE utf8mb4_unicode_ci COMMENT \'(DC2Type:array)\'');
        $this->addSql('ALTER TABLE identification CHANGE id_code id_code VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE jur_address CHANGE regional_code_id regional_code_id VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
