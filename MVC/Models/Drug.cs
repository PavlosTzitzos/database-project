using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Data.Entity;
using System.Linq;
using System.Web;

namespace sdop.Models
{
    public class Drug
    {
        public int DrugId { get; set; }

        [Key]
        [Required]
        [StringLength(50)]
        public string DrugName { get; set; }

        [Required]
        [Range(999999999, 9999999999)]
        public long DrugSerialCode { get; set; }

        [Range(0,99999)]
        public decimal Price { get; set; }

        [StringLength(500)]
        public string DrugType { get; set; }

        [Display(Name = "Production Date")]
        [DataType(DataType.Date)]
        [DisplayFormat(DataFormatString = "{0:yyyy-MM-dd}", ApplyFormatInEditMode = true)]
        public DateTime ProductionDate { get; set; }

        [Display(Name = "Expiration Date")]
        [DataType(DataType.Date)]
        [DisplayFormat(DataFormatString = "{0:yyyy-MM-dd}", ApplyFormatInEditMode = true)]
        public DateTime ExpirationDate { get; set; }
        public bool Approval { get; set; }

        [StringLength(500)]
        public string Dose { get; set; }

        [StringLength(500)]
        public string Package { get; set; }

        [StringLength(500)]
        public string Description { get; set; }

        public ICollection<Prescription> Prescriptions { get; set; } // contains relationship
        public ICollection<Company> Companies { get; set; } // produce relationship

        public ICollection<Salesman> Salesmen { get; set; } //promote relationship

        public ICollection<Sdop> Sdops { get; set; } //provides relationship

        public ICollection<Distributor> Distributors { get; set; } //distribute relationship
    }
    public class DrugDBContext : DbContext
    {
        public DbSet<Drug> Drugs { get; set; }
    }
}