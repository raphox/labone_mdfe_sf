<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200224180655 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE mdfe_ide_loading_city (mdfe_ide_id INT NOT NULL, city_id INT NOT NULL, INDEX IDX_FE43A5C19C95957A (mdfe_ide_id), INDEX IDX_FE43A5C18BAC62AF (city_id), PRIMARY KEY(mdfe_ide_id, city_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mdfe_ide_loading_city ADD CONSTRAINT FK_FE43A5C19C95957A FOREIGN KEY (mdfe_ide_id) REFERENCES mdfe_ide (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE mdfe_ide_loading_city ADD CONSTRAINT FK_FE43A5C18BAC62AF FOREIGN KEY (city_id) REFERENCES city (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE mdfe_ide_loading_city');
    }
}
