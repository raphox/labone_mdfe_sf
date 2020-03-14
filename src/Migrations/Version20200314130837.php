<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200314130837 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE mdfe_ide_seg (id INT AUTO_INCREMENT NOT NULL, mdfe_id INT DEFAULT NULL, resp_seg INT NOT NULL, x_seg VARCHAR(255) NOT NULL, cnpj VARCHAR(255) NOT NULL, n_apol VARCHAR(255) NOT NULL, n_aver LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', resp_seg_cnpj VARCHAR(255) DEFAULT NULL, resp_seg_cpf VARCHAR(255) DEFAULT NULL, INDEX IDX_B932012667E226E9 (mdfe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mdfe_ide_veic_tracao_condutor (id INT AUTO_INCREMENT NOT NULL, mdfe_ide_veic_tracao_id INT DEFAULT NULL, x_nome VARCHAR(255) NOT NULL, cpf VARCHAR(255) NOT NULL, INDEX IDX_61DDFEC57125B10A (mdfe_ide_veic_tracao_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mdfe_ide_seg ADD CONSTRAINT FK_B932012667E226E9 FOREIGN KEY (mdfe_id) REFERENCES mdfe_ide (id)');
        $this->addSql('ALTER TABLE mdfe_ide_veic_tracao_condutor ADD CONSTRAINT FK_61DDFEC57125B10A FOREIGN KEY (mdfe_ide_veic_tracao_id) REFERENCES mdfe_ide_veic_tracao (id)');
        $this->addSql('ALTER TABLE mdfe_ide_inf_contratante ADD mdfe_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE mdfe_ide_inf_contratante ADD CONSTRAINT FK_6C8EE83B67E226E9 FOREIGN KEY (mdfe_id) REFERENCES mdfe_ide (id)');
        $this->addSql('CREATE INDEX IDX_6C8EE83B67E226E9 ON mdfe_ide_inf_contratante (mdfe_id)');
        $this->addSql('ALTER TABLE mdfe_ide_unloading_city_document DROP n_item');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE mdfe_ide_seg');
        $this->addSql('DROP TABLE mdfe_ide_veic_tracao_condutor');
        $this->addSql('ALTER TABLE mdfe_ide_inf_contratante DROP FOREIGN KEY FK_6C8EE83B67E226E9');
        $this->addSql('DROP INDEX IDX_6C8EE83B67E226E9 ON mdfe_ide_inf_contratante');
        $this->addSql('ALTER TABLE mdfe_ide_inf_contratante DROP mdfe_id');
        $this->addSql('ALTER TABLE mdfe_ide_unloading_city_document ADD n_item INT DEFAULT NULL');
    }
}
