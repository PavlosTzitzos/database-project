using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Data;
using System.Data.Entity;
using System.Linq;
using System.Web;

namespace sdop.Models
{
    public class Distributor
    {
        [Key]
        public int DistributorId { get; set; }

        [Required]
        [StringLength(50)]
        public string DistributorName { get; set; }

        [Range(0, 500)]
        public int Points { get; set; }

        [Range(0, 9999)]
        public int DistributorCapacity { get; set; }

        [Range(0, 999)]
        public int MeanDistrTimeHours { get; set; }

        [Range(0, 250)]
        public int DistrRangeKm { get; set; }

        public ICollection<Sdop> Sdops { get; set; } // sell relationship

        public ICollection<Drug> Drugs { get; set; } // distribute relationship

        public Company Company { get; set; } // buy relationship

    }
    public class DistributorDBContext : DbContext
    {
        public DbSet<Distributor> Distributors { get; set; }
    }
}