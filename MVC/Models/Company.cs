using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Data.Entity;
using System.Linq;
using System.Web;

namespace sdop.Models
{
    public class Company
    {
        public int Id { get; set; }

        [Key]
        [Required]
        [StringLength(50)]
        public string CompanyName { get; set; }

        [Required]
        [StringLength(200)]
        public string HQAddress { get; set; }

        [Range(0, 999)]
        public int IncomeOutcomeB { get; set; }

        [Range(0, 200)]
        public int NumberOfSalesmen { get; set; }

        [Range(0, 200)]
        public int NumberOfFactories { get; set; }

        [Range(0, 999)]
        public double NewDrugRate { get; set; }

        public ICollection<Salesman> Salesmen { get; set; } // consists of relationship

        public ICollection<Drug> Drugs { get; set; } //produce relationship

        public ICollection<Distributor> Distributors { get; set; } // buy relationship
    }
    public class CompanyDBContext : DbContext
    {
        public DbSet<Company> Companies { get; set; }

        public System.Data.Entity.DbSet<sdop.Models.Doctor> Doctors { get; set; }
    }
}