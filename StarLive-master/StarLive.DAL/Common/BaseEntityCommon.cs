using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace StarLive.DAL.Common
{
  public abstract  class BaseEntityCommon
    {
        public DateTime? CreatedDate { get; set; }
        public DateTime? UpdatedDate { get; set; }
        public bool IsDeleted { get; set; }
        public  string DeletedBy { get; set; }
        public DateTime? DeletedOn { get; set; }
        //public string Createdby { get; set; }
        //public string Updatedby { get; set; }
    }
}
