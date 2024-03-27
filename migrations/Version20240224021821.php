<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240224021821 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category2 (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sous_category2 (id INT AUTO_INCREMENT NOT NULL, category2_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_EDB9EB7D8ACF47B4 (category2_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE sous_category2 ADD CONSTRAINT FK_EDB9EB7D8ACF47B4 FOREIGN KEY (category2_id) REFERENCES category2 (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sous_category2 DROP FOREIGN KEY FK_EDB9EB7D8ACF47B4');
        $this->addSql('DROP TABLE category2');
        $this->addSql('DROP TABLE sous_category2');
    }
}
