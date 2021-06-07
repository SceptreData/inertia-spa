const Alert = ({ children, color = 'white' }) => {
  return (
    <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div className="py-6">
        <div className={`bg-${color} overflow-hidden shadow-sm sm:rounded-lg`}>
          <div className={`p-6 bg-${color} border-b border-gray-200`}>
            {children}
          </div>
        </div>
      </div>
    </div>
  );
}

export { Alert }