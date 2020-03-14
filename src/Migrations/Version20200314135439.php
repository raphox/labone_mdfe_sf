<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200314135439 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE mdfe_ide_tot (id INT AUTO_INCREMENT NOT NULL, mdfe_id INT DEFAULT NULL, q_cte INT NOT NULL, q_nfe INT NOT NULL, q_mdfe INT NOT NULL, v_carga DOUBLE PRECISION NOT NULL, c_unid INT NOT NULL, q_carga DOUBLE PRECISION NOT NULL, UNIQUE INDEX UNIQ_C22CBEF767E226E9 (mdfe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mdfe_ide_tot ADD CONSTRAINT FK_C22CBEF767E226E9 FOREIGN KEY (mdfe_id) REFERENCES mdfe_ide (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE mdfe_ide_tot');
    }
}
