<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180825053808 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE personal (id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(255) NOT NULL, second_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, alternate_name VARCHAR(255) NOT NULL, secret_word VARCHAR(255) NOT NULL, gender VARCHAR(100) NOT NULL, birth_day DATE NOT NULL, birth_place VARCHAR(255) NOT NULL, citizenship_country_id INT NOT NULL, has_green_card TINYINT(1) NOT NULL, name_was_changed TINYINT(1) NOT NULL, previous_first_name VARCHAR(255) NOT NULL, previous_second_name VARCHAR(255) NOT NULL, previous_last_name VARCHAR(255) NOT NULL, name_date_of_change DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE personal');
    }
}
