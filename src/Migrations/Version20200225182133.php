<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200225182133 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE mdfe_ide_condutor (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mdfe_ide_veic_tracao ADD mdfe_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE mdfe_ide_veic_tracao ADD CONSTRAINT FK_E104055167E226E9 FOREIGN KEY (mdfe_id) REFERENCES mdfe_ide (id)');
        $this->addSql('CREATE INDEX IDX_E104055167E226E9 ON mdfe_ide_veic_tracao (mdfe_id)');
        $this->addSql('ALTER TABLE mdfe_ide_veic_reboque ADD mdfe_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE mdfe_ide_veic_reboque ADD CONSTRAINT FK_2F2984E767E226E9 FOREIGN KEY (mdfe_id) REFERENCES mdfe_ide (id)');
        $this->addSql('CREATE INDEX IDX_2F2984E767E226E9 ON mdfe_ide_veic_reboque (mdfe_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE mdfe_ide_condutor');
        $this->addSql('ALTER TABLE mdfe_ide_veic_reboque DROP FOREIGN KEY FK_2F2984E767E226E9');
        $this->addSql('DROP INDEX IDX_2F2984E767E226E9 ON mdfe_ide_veic_reboque');
        $this->addSql('ALTER TABLE mdfe_ide_veic_reboque DROP mdfe_id');
        $this->addSql('ALTER TABLE mdfe_ide_veic_tracao DROP FOREIGN KEY FK_E104055167E226E9');
        $this->addSql('DROP INDEX IDX_E104055167E226E9 ON mdfe_ide_veic_tracao');
        $this->addSql('ALTER TABLE mdfe_ide_veic_tracao DROP mdfe_id');
    }
}
