<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200103144107 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE mdfe_ide_loading_city (id INT AUTO_INCREMENT NOT NULL, mdfe_id INT DEFAULT NULL, city_id INT DEFAULT NULL, INDEX IDX_FE43A5C167E226E9 (mdfe_id), INDEX IDX_FE43A5C18BAC62AF (city_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mdfe_ide_unloading_city (id INT AUTO_INCREMENT NOT NULL, mdfe_id INT DEFAULT NULL, city_id INT DEFAULT NULL, INDEX IDX_68D016567E226E9 (mdfe_id), INDEX IDX_68D01658BAC62AF (city_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mdfe_ide_loading_city ADD CONSTRAINT FK_FE43A5C167E226E9 FOREIGN KEY (mdfe_id) REFERENCES mdfe_ide (id)');
        $this->addSql('ALTER TABLE mdfe_ide_loading_city ADD CONSTRAINT FK_FE43A5C18BAC62AF FOREIGN KEY (city_id) REFERENCES city (id)');
        $this->addSql('ALTER TABLE mdfe_ide_unloading_city ADD CONSTRAINT FK_68D016567E226E9 FOREIGN KEY (mdfe_id) REFERENCES mdfe_ide (id)');
        $this->addSql('ALTER TABLE mdfe_ide_unloading_city ADD CONSTRAINT FK_68D01658BAC62AF FOREIGN KEY (city_id) REFERENCES city (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE mdfe_ide_loading_city');
        $this->addSql('DROP TABLE mdfe_ide_unloading_city');
    }
}
